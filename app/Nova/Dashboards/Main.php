<?php

namespace App\Nova\Dashboards;

use App\Nova\Metrics\JobsPerDay;
use App\Nova\Metrics\NewJobs;
use App\Nova\Metrics\NewPosts;
use App\Nova\Metrics\NewQnas;
use App\Nova\Metrics\NewUsers;
use App\Nova\Metrics\PostsPerDay;
use App\Nova\Metrics\QnasPerDay;
use App\Nova\Metrics\UsersPerDay;
use Laravel\Nova\Dashboards\Main as Dashboard;

class Main extends Dashboard
{
    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {
        return [
            (new NewUsers())->width('1/3'),
            (new UsersPerDay())->width('2/3'),
            (new NewJobs())->width('1/3'),
            (new JobsPerDay())->width('2/3'),
            (new NewPosts())->width('1/3'),
            (new PostsPerDay())->width('2/3'),
            (new NewQnas())->width('1/3'),
            (new QnasPerDay())->width('2/3'),
        ];
    }
}
