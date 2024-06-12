<?php

namespace App\Http\Controllers\API\Submission;

use App\Http\Controllers\Controller;
use App\Http\Requests\Submission\CreateRequest;
use App\Jobs\SubmissionSave;

class CreateController extends Controller
{
    public function __invoke(CreateRequest $createRequest)
    {
        $validatedData = $createRequest->validated();
        SubmissionSave::dispatch($validatedData);

        return response()->json(null)->setStatusCode(202);
    }
}
