<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courseid extends Model
{
    protected $fillable = [
        'cid','teacher_id','course_id'
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
}
