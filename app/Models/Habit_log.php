<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Habit_log extends Model
{
    protected $fillable = [
        'user_id',
        'habit_id',
        'completed_at',
    ];
}
