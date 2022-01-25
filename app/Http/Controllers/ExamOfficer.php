<?php

namespace App\Http\Controllers;

use App\Mail\InvitedUser;
use App\Models\UserPending;
use Illuminate\Http\Request;
use App\Http\Middleware\Role_examination_officer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ExamOfficer extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth',Role_examination_officer::class]);
    }

    public function usersOfficer(){
        return view ('users_officer');
    }

    public function officer_newUser(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email'
        ]);

        $validator->after(function ($validator) use ($request) {
            if (UserPending::where('pending_email', $request->input('email'))->exists()) {
                $validator->errors()->add('email', 'There exists an invite with this email!');
            }
        });
        if ($validator->fails()) {
            return redirect(route('Users_officer'))
                ->withErrors($validator)
                ->withInput();
        }
        do {
            $token = Str::random(20);
        } while (UserPending::where('token', $token)->first());

        $new_user= new UserPending;
        $new_user->pending_email = $request->input('email');
        $new_user->pending_role = $request->input('role');
        $new_user->by_whom = Auth::id();
        $new_user->token = $token;
        $new_user->status = 0 ;
        $new_user->save();

        $url = URL::temporarySignedRoute(
            'registration', now()->addMinutes(10080), ['token' => $token]
        );

        Mail::to($request->input('email'))->send(new InvitedUser($url));

        return redirect()->back()->with('success','New user invited successfully');

    }
}
