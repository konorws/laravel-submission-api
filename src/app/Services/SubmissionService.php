<?php

namespace App\Services;

use App\Events\SubmissionSaved;
use App\Http\Requests\Submission\CreateRequest;
use App\Models\Submission;
use Illuminate\Support\Facades\Validator;

class SubmissionService
{
    public function create(array $data): void
    {
        $validatorData = Validator::make($data, CreateRequest::rules())->validated();

        $submission = new Submission($validatorData);
        $submission->save();

        SubmissionSaved::dispatch($submission);
    }
}
