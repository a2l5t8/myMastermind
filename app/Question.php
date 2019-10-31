<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'text','type','choices','answer',
    ];

    public function assignment()
    {
        return $this->belongsTo(Assignment::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }

}
