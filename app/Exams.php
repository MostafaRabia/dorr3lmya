<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Exams extends Authenticatable
{
    protected $table = 'exams';
    protected $fillable = [
        'name', 'time', 'ques',
    ];
}
