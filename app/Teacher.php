<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'first_name','last_name','age',
        'continent','zip_code','city','address',
        'institution','department','discipline',
        'access_code','is_active'
    ];

    public function info()
    {
        return $this->belongsTo(User::class);
    }

    public function courses()
    {
        return $this->hasMany(Courseid::class);
    }
}
