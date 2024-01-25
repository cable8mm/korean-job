<?php

namespace App\Enums;

use App\Traits\EnumCasesTrait;

enum SocialProviderEnum
{
    use EnumCasesTrait;

    case facebook;
    case github;
    case google;
    case instagram;

    /**
     * callback return parameters are 'id', 'nickname', 'name', 'email' and 'avatar'
     *
     * @example $providerUser->id(), $providerUser->nickname(), $providerUser->name(), $providerUser->email(), $providerUser->avatar()
     */
    case kakao;
    case naver;

    public static function exist($provider): bool
    {
        return in_array($provider, self::kCases());
    }
}
