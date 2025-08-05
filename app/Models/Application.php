<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Application extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = [
        'career_id',
        'full_name',
        'birth',
        'nation_id',
        'nationality',
        'address',
        'gender',
        'status',
        'degree',
        'graduation',
        'major',
        'courses',
        'experience',
        'employment_status',
        'current_salary',
        'expected_salary',
        'fist_language',
        'first_language_level',
        'second_language',
        'second_language_level',
        'other_language',
        'other_language_level',
        'email',
        'phone',
        'cv_file',
        'front_national_id',
        'back_national_id',
        'application_status'
    ];

    public function career()
    {
        return $this->belongsTo(Career::class);
    }
}
