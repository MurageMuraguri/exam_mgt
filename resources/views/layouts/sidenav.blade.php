{{-- @extends('layouts.dashApp') --}}
{{--@extends('layouts.dashApp')--}}

{{--@section('sidenav')--}}
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark bg-white" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" >
            <span class="ms-1 font-weight-bold text-white">{{ config('app.name') }}</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
{{--            @if ()--}}
            <li class="nav-item">
                <a class="nav-link text-white " href="{{route('exam_period')}}">
                    <div class="text-center me-2 d-flex align-items-center justify-content-center text-white">
                        <i class="material-icons opacity-10">date_range</i>
                    </div>
                    <span class="nav-link-text ms-1">Examination Periods</span>
                </a>
            </li>
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link text-white" href="../pages/billing.html">--}}
{{--                    <div class="text-center me-2 d-flex align-items-center justify-content-center text-white">--}}
{{--                        <i class="material-icons opacity-10">receipt_long</i>--}}
{{--                    </div>--}}
{{--                    <span class="nav-link-text ms-1">Schedule</span>--}}
{{--                </a>--}}
{{--            </li>--}}
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('exams')}}">
                    <div class="text-center me-2 d-flex align-items-center justify-content-center text-white">
                        <i class="material-icons opacity-10">feed</i>
                    </div>
                    <span class="nav-link-text ms-1">Examinations</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('Users_officer') }}">
                    <div class="text-center me-2 d-flex align-items-center justify-content-center text-white">
                        <i class="material-icons opacity-10">people_alt</i>
                    </div>
                    <span class="nav-link-text ms-1">Users</span>
                </a>
            </li>
{{--            @endif--}}
            <li class="nav-item">
                <a class="nav-link text-white" href="../pages/notifications.html">
                    <div class="text-center me-2 d-flex align-items-center justify-content-center text-white">
                        <i class="material-icons opacity-10">notifications</i>
                    </div>
                    <span class="nav-link-text ms-1">Notifications</span>
                </a>
            </li>
{{--            <li class="nav-item mt-3">--}}
{{--                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link text-white" href="../pages/profile.html">--}}
{{--                    <div class="text-center me-2 d-flex align-items-center justify-content-center text-white">--}}
{{--                        <i class="material-icons opacity-10">person</i>--}}
{{--                    </div>--}}
{{--                    <span class="nav-link-text ms-1">Profile</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link text-white" href="../pages/sign-in.html">--}}
{{--                    <div class="text-center me-2 d-flex align-items-center justify-content-center text-white">--}}
{{--                        <i class="material-icons opacity-10">login</i>--}}
{{--                    </div>--}}
{{--                    <span class="nav-link-text ms-1">Sign In</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link text-white" href="../pages/sign-up.html">--}}
{{--                    <div class="text-center me-2 d-flex align-items-center justify-content-center text-white">--}}
{{--                        <i class="material-icons opacity-10">assignment</i>--}}
{{--                    </div>--}}
{{--                    <span class="nav-link-text ms-1">Sign Up</span>--}}
{{--                </a>--}}
            </li>
        </ul>
    </div>
</aside>
{{--@endsection--}}



