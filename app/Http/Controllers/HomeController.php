<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Notice;
use App\Models\Post;
use App\Models\Qna;

class HomeController extends Controller
{
    public function __invoke()
    {
        $jobs = Job::latest()->take(8)->get();

        $notices = Notice::latest()->take(8)->get();

        $qnas = Qna::latest()->take(8)->get();

        $posts = Post::latest()->take(8)->get();

        return view('home', [
            'jobs' => $jobs,
            'notices' => $notices,
            'qnas' => $qnas,
            'posts' => $posts,
        ]);
    }
}
