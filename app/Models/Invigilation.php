<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invigilation extends Model
{
    use HasFactory;

    protected $table = 'invigilation';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    /*
     *Status -> 0-sent successfully, 1-accepted,2-late
     */
    protected $fillable = [
       'id','exam_id','lecturer_id','created_at','updated_at'
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
