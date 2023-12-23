<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    public function users()
    {
        return $this->belongsToMany(User::class 'user_jobs', 'job_id', 'user_id');
    }
    public function jobs()
    {
        return $this->belongsToMany(User::class);
    }
}
