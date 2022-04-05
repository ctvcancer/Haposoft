<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CoursesTag extends Model
{
    use HasFactory;
    use SoftDEletes;

    protected $fillable = [
        'user_id',
        'course_id',
    ];
}
