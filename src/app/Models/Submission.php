<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Submission extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'submissions';

    protected $fillable = [
        'name',
        'email',
        'message',
    ];
}
