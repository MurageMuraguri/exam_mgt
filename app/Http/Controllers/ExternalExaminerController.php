<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Role_external_examiner;
use App\Models\Exam;
use App\Models\ExamPeriod;
use App\Models\Invigilation;
use Illuminate\Support\Facades\Auth;

class ExternalExaminerController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth',Role_external_examiner::class]);
    }


    public function index(){
        $exams = Exam::leftjoin('users','users.id','=','exam.lecturer_id')
            ->get();
        $latest = ExamPeriod::latest()->first();

        return view('external',[
            'exams'=>$exams,
            'exam_period'=>$latest->name
        ]);
    }

    public function deadlines(){
        $deadlines = Exam::where('lecturer_id',Auth::id())->get();

        return view ('deadline',[
            'deadlines' => $deadlines
        ]);
    }
}
