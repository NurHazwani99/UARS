<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'report_type',
        'apart_num',
        'student_name',
        'phone_no',
        'sub_of_rep',
        'des_of_rep',
        'report_receive',
        'attachment',
        'status'      
    ];


    protected $primaryKey = 'report_id';
    public $timestamps=false;
}

