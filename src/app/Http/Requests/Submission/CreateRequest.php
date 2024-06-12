<?php

namespace App\Http\Requests\Submission;

use App\Http\Requests\AbstractRequest;

class CreateRequest extends AbstractRequest
{
    public static function rules(): array
    {
        return [
            'name' => 'required|string:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
