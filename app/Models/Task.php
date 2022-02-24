<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    const TASK_IN_PROGRESS = 0;
    const TASK_COMPLETED = 1;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
