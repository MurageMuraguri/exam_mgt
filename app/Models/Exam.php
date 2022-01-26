<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $table = 'exam';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    /*
     *Status -> 0-sent successfully, 1-accepted,2-late
     */
    protected $fillable = [
        'lecturer_id','external_examiner_id','name','exam_period_id','exam_date','lecturer_deadline_1','lecturer_deadline_2','external_examiner_deadline','status','external_approval','final_draft','created_at','updated_at'
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
