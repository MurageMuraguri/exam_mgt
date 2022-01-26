<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamPeriod extends Model
{
    use HasFactory;

    protected $table = 'exam_period';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    /*
     *Status -> 0-sent successfully, 1-accepted,2-late
     */
    protected $fillable = [
        'session','academic_year','start_date','end_date','name','created_at','updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
