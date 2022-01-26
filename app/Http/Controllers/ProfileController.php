<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
            $profile_data = Auth::user();
        return view('profile',['profile'=>$profile_data]);
    }

    public function updateInfo(Request $request){

       $updateEntry = User::find(Auth::id());
       $updateEntry->first_name = $request->input('first_name');
       $updateEntry->last_name = $request->input('last_name');
       $updateEntry->title = $request->input('title');
       $updateEntry->specialization = $request->input('specialization');
       $updateEntry->save();

       return back()->with('status','Your information has been updated');
    }
}
