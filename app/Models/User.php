<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    /*
     *Gender - 1 is male, 0 is female
     * role - 0 internal/lec, 1 external examiner
     */
    protected $fillable = [
        'first_name','last_name','title','email','email_verified_at','password','role','gender','specialization','isAdmin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'isAdmin' => 'boolean',
    ];
}
