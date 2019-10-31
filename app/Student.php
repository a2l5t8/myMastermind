<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Cashier\Billable;

class Student extends Model
{
    use Billable;

    protected $fillable = [
        'user_id'
    ];

    public function info()
    {
        return $this->belongsTo(User::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Courseid::class);
    }

    public function questions()
    {
        return $this->belongsToMany(Question::class);
    }
}
