<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $fillable = [
        'name','start_time','end_time','course_id'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function courseid()
    {
        return $this->belongsTo(Courseid::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
