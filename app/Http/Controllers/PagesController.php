<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\View\View;

class PagesController extends Controller
{
    public function __invoke(string $slug): View
    {
        return view('pages.'.Str::of($slug)->replace('-', '_'));
    }
}
