<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamOfficer extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','Role_examination_officer']);
    }

    public function usersOfficer(){
        return view ('users_officer');
    }
}
