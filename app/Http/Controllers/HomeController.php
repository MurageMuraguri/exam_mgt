<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public $role;

    public function __construct()
    {
        $this->middleware('auth');
//       $role =  Auth::user()->role;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $role = $user->role;

        switch($role){
            case 0:
                return redirect('/my_activities');
                break;
            case 1:
                return redirect('/my_exams');
                break;
            case 2:
                return redirect('/exam_period');
                break;
            default:
                return redirect('/profile');
                break;
        }

    }
}
