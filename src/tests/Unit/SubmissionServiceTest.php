<?php

namespace Tests\Unit\Services;

use App\Events\SubmissionSaved;
use App\Http\Requests\Submission\CreateRequest;
use App\Models\Submission;
use App\Services\SubmissionService;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Validator;
use Mockery;
use Tests\TestCase;

class SubmissionServiceTest extends TestCase
{
    public function testCreateValidatesDataAndSavesSubmission()
    {
        $data = [
            'name' => 'Test Unit',
            'email' => 'unit@test.com',
            'message' => 'Unit message',
        ];
        Event::fake();

        $service = new SubmissionService();
        $service->create($data);
        $this->assertDatabaseHas('submissions', [
            'name' => 'Test Unit',
            'email' => 'unit@test.com',
            'message' => 'Unit message',
        ]);

        Event::assertDispatched(SubmissionSaved::class, function ($event) use ($data) {
            return $event->submission->name === $data['name'] &&
                $event->submission->email === $data['email'] &&
                $event->submission->message === $data['message'];
        });
    }
}
