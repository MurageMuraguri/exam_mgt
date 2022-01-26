<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Role_admin;
use App\Http\Middleware\Role_examination_officer;
use App\Models\ExamPeriod;
use Illuminate\Http\Request;

class ExamPeriodController extends Controller
{
    public function __construct(){
        $this->middleware(['auth',Role_examination_officer::class]);
    }

    public function index(){

        return view('exam_period');
    }

    public function insert(Request $request){
      if(ExamPeriod::create([
            'academic_year' => $request->input('year'),
            'session' => $request->input('session'),
            'name' => $request->input('name'),
            'start_date' => $request->input('start'),
            'end_date' => $request->input('end')
        ])){
          return back() -> with('status','New exam period created');
      }else{
          return back()->with('error','Creation unsuccessful, try again');
      }

    }
}
