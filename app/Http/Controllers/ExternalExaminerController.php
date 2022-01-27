<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Role_external_examiner;
use App\Models\Exam;
use App\Models\ExamPeriod;
use App\Models\Invigilation;
use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExternalExaminerController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth',Role_external_examiner::class]);
    }


    public function index(){
        $exams = Exam::where('external_examiner_id',Auth::id())->get();
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

    public function e_view_exam($id){
        $exam_details = Exam::where('id',$id)->get()->first();
        $submissions = Submission::where('exam_id','$id')->orderBy('created_at');

        return view('ex_exam_view',[
            'exam_details' => $exam_details,
            'submissions' => $submissions
        ]);
    }

    public function submit(Request $request){
        $name = $request->file('submission')->getClientOriginalName();

        $path = $request->file('submission')->move('submissions', $name);

        if(Submission::create([
            'exam_id'=>$request->input('exam_id'),
            'lecturer_id'=>$request->input('lecturer_id'),
            'external_examiner_id'=>$request->input('external_examiner_id'),
            'location'=>$path,
            'uploaded_by'=>$request->input('uploaded_by')
        ])){

            return back() -> with('status','Submission uploaded successfully');
        }else{
            return back()->with('error','Submission Unsuccessful');
        }
    }
}
