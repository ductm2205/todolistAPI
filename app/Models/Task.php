<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'deadline',
        'taskable_id',
        'taskable_type',
        'isCompleted',
    ];

    public function taskable()
    {
        return $this->morphTo();
    }
}
