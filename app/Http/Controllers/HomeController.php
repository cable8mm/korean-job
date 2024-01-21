<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Notice;

class HomeController extends Controller
{
    public function __invoke()
    {
        $jobs = Job::latest()->take(10)->get();

        $notices = Notice::latest()->take(4)->get();

        return view('home', [
            'jobs' => $jobs,
            'notices' => $notices,
        ]);
    }
}
