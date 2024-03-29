{{--@extends('layouts.sidenav')--}}

{{--@section('nav')--}}
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                </div>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        {{ Auth::user()->title }} {{ Auth::user()->last_name }}
                    </li>
                    <li class="nav-item dropdown pe-2 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="material-icons opacity-10" style="padding-left:5px">lock</i>
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                            <li class="mb-2">
                                <div class="d-flex py-1">
                                <a class="dropdown-item border-radius-md" href="{{ route('profile') }}">
                                        Profile
                                </a>
                                </div>
                            </li>
                            <li class="mb-2" style="padding-left: 5px">
                                <a class="dropdown-item border-radius-md" href="j{{ route('logout') }}"  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                                                    <span class="d-sm-inline d-none">  {{ __('Logout') }}</span>
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>


                                </a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
{{--@endsection--}}
