<?php

namespace App\Http\Controllers\Social;

use App\Enums\SocialProviderEnum;
use App\Http\Controllers\Controller;
use App\Models\SocialIdentity;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class AuthenticatedSocialController extends Controller
{
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function redirectProvider($provider)
    {
        if (! SocialProviderEnum::exist($provider)) {
            abort(404);
        }

        return Socialite::driver($provider)->redirect();
    }

    public function callbackProvider($provider)
    {
        if (! SocialProviderEnum::exist($provider)) {
            abort(404);
        }

        try {
            $providerUser = Socialite::driver($provider)->user();
        } catch (\Exception $e) {

            return redirect()->route('login');
        }

        $socialIdentity = SocialIdentity::where('provider', $provider)->where('provider_id', $providerUser->getId())->first();

        if ($socialIdentity) {
            $user = $socialIdentity->user;

            Auth::login($user, true);

            return redirect($this->redirectTo);
        }

        try {
            DB::beginTransaction();

            $user = User::where('email', $providerUser->getEmail())->first();

            if (! $user) {
                $providerUserEmail = $providerUser->getEmail();
                $user = User::create([
                    'name' => $providerUser->getNickname() ?? 'Anonymous',
                    'email' => $providerUserEmail,
                    'email_verified_at' => $providerUserEmail ? now() : null,
                    'password' => Hash::make(''),
                ]);
            }

            $socialIdentity = SocialIdentity::updateOrCreate([
                'user_id' => $user->id,
                'provider' => $provider,
                'provider_id' => $providerUser->getId(),
            ], [
                'token' => $providerUser->token ?? '',
                'refresh_token' => $providerUser->refreshToken ?? '',
                'expires_in' => $providerUser->expiresIn ?? '',
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            return back()->with('status', __('Social can not be logged in.'));
        }

        DB::commit();

        Auth::login($user);

        return back()->with('status', __('Social can be logged in.'));
    }
}
