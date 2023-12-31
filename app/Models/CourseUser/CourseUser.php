<?php

namespace App\Models\CourseUser;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseUser extends Model
{
    use HasFactory;
    protected $table = 'course_user';
    protected $fillable = [
        'user_id',
        'course_id',
        'is_enrole',
    ];
}
