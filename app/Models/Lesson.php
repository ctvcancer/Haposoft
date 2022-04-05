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
        'courses_id',
        'description',
        'requirment',
        'name',
        'thumbnail',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_lesson', 'user_id', 'lesson_id');
    }

    public function documents()
    {
        return $this->hasMany(Document::class, 'lesson_id');
    }

    public function course()
    {
        return $this->belongsTo(Courses::class);
    }
}
