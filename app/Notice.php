<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $fillable = [
        'notice_type',
        'description'      
    ];


    protected $primaryKey = 'notice_id';
    public $timestamps=false;
}
