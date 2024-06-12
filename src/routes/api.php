<?php

use App\Http\Controllers\API\Submission\CreateController;
use Illuminate\Support\Facades\Route;

Route::post('/submit', CreateController::class)->middleware('api');
