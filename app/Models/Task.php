<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name',
        'creator',
        'description',
        'topic',
        'status',
        'deadline',
    ];

    protected $table = 'tasks';
}
