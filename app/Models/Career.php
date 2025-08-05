<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Career extends Model
{
        use HasFactory, SoftDeletes;

    protected $fillable = [
        'job_title',
        'department',
        'location',
        'requirements',
        'status',
    ];

    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
