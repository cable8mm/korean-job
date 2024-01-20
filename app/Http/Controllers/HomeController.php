<?php

namespace App\Http\Controllers;

use App\Models\Job;

class HomeController extends Controller
{
    public function __invoke()
    {
        $jobs = Job::latest()->get();

        return view('home', [
            'jobs' => $jobs,
        ]);
    }
}
