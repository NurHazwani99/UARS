<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Model
{
    use Notifiable;

    protected $guard = 'student';

    protected $fillable = [
        'name','password',
    ];

    protected $hidden = [
        'password',
    ];
}
