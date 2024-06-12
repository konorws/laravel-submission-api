<?php

namespace App\Listeners;

use App\Events\SubmissionSaved;
use Illuminate\Support\Facades\Log;

class SubmissionSavedListener
{
    public function handle(SubmissionSaved $event): void
    {
        Log::info('Submission saved:', [
            'name' => $event->submission->name,
            'email' => $event->submission->email
        ]);
    }
}
