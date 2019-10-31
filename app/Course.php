<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'course_identifier','name','price','start_time','end_time','teacher_id','description'
    ];

    public function courseIds()
    {
        return $this->hasMany(Courseid::class);
    }

    public function owner()
    {
        return $this->belongsTo(Teacher::class);
    }

//    public function subscribers()
//    {
//        return $this->belongsToMany(Student::class);
//    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }
}
