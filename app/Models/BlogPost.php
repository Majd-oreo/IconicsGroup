<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogPost extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'users_id',
        'title',
        'content',
        'author',
        'image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
