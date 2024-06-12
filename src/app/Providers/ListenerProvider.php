<?php

namespace App\Providers;

use App\Events\SubmissionSaved;
use App\Listeners\SubmissionSavedListener;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class ListenerProvider extends ServiceProvider
{
    protected $listen = [
        SubmissionSaved::class => [
            SubmissionSavedListener::class,
        ],
    ];

    public function boot()
    {
    }
}
