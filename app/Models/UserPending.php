<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPending extends Model
{
    use HasFactory;

    protected $table = 'user_pending';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    /*
     *Status -> 0-sent successfully, 1-accepted,2-late
     */
    protected $fillable = [
        'pending_email','pending_role','by_whom','token','status','created_at','updated_at'
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
