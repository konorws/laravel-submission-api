<?php

namespace App\Jobs;

use App\Services\SubmissionService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SubmissionSave implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected array $data;

    public function __construct(
        array $data
    ) {
        $this->data = $data;
    }

    public function handle(SubmissionService $submissionService): void
    {
        $submissionService->create($this->data);
    }
}