<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Role_internal_lec;
use App\Models\Exam;
use App\Models\ExamPeriod;
use App\Models\Invigilation;
use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InternalLecController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth',Role_internal_lec::class]);
    }

    public function index(){
        $exams = Exam::where('lecturer_id',Auth::id())->get();
        $invigilations = Invigilation::join('exam','invigilation.exam_id', '=', 'exam.id')
                        ->where('invigilation.lecturer_id',Auth::id())
                        ->get(['invigilation.*','exam.name','exam.exam_date']);


        return view('activities',[
            'exams'=>$exams,
            'invigilations' =>$invigilations
        ]);
    }

    public function schedule(){
        $exams = Exam::leftjoin('users','users.id','=','exam.lecturer_id')
            ->get();
        $latest = ExamPeriod::latest()->first();

        return view('schedule',[
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

    public function view_exam($id){
        $exam_details = Exam::where('id',$id)->get()->first();
        $submissions = Submission::where('exam_id','$id')->orderBy('created_at');

        return view('exam_viewI',[
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
