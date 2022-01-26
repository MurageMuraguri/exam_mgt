@extends('layouts.dashApp')

@section('content')
    <div class="container" style="padding-top: 50px; padding-left:200px">
        <div class="row">
        <div class="card">
            <div class="row gx-4 mb-2">
                <div class="col-auto my-auto">
                    <div class="h-100" style="padding-top:25px;">
                        <h5 class="mb-1">
                            {{$profile->first_name}} {{$profile->last_name}}
                        </h5>
                        <p class="mb-0 font-weight-normal text-sm">
                           {{$profile->title}}
                        </p>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="row">
                    <div class="col-12 col-xl-4">
                        <div class="card card-plain h-100">
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-md-8 d-flex align-items-center">
                                        <h6 class="mb-0">Profile Information</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <hr class="horizontal gray-light my-2">
                                <ul class="list-group text-md">
                                    <li class="list-group-item border-0 ps-0 pt-0 text-md"><strong class="text-dark">E-mail:</strong>   {{$profile->email}} </li>
                                    <li class="list-group-item border-0 ps-0 text-md"><strong class="text-dark">Specialization:</strong>    {{$profile->specialization}}    </li>
                                    <li class="list-group-item border-0 ps-0 text-md"><strong class="text-dark">Title:</strong> {{$profile->title}} </li>
                                    <li class="list-group-item border-0 ps-0 text-md"><strong class="text-dark">User since:</strong>    {{date('d-m-Y',strtotime($profile->created_at))}}   </li>
                                    <li class="list-group-item border-0 ps-0 text-md"><strong class="text-dark">Role:</strong>
                                        @switch($profile->role)
                                            @case(0)
                                            Internal Lecturer
                                            @break

                                            @case(1)
                                            External Examiner
                                            @break

                                            @case(2)
                                            Examination Officer
                                            @break

                                            @case(3)
                                            Administrator
                                            @break

                                            @default
                                            --
                                        @endswitch
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-8">
                        <div class="card card-plain h-100">
                            <div class="card-header pb-0 p-3">
                                <h6 class="mb-0">Edit Profile</h6>
                            </div>
                            <form method="POST" role="form" action={{route('updateInfo')}}>
                                @csrf

                                <div class="input-group input-group-static mb-4" style="padding-left: 15px; padding-right: 15px;">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" required name="first_name" value="{{$profile->first_name}}">
                                </div>

                                <div class="input-group input-group-static mb-4" style="padding-left: 15px; padding-right: 15px;">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" required name="last_name" value="{{$profile->last_name}}">
                                </div>

                                <div class="input-group input-group-static mb-4" style="padding-left: 15px; padding-right: 15px;">
                                    <label>Title</label>
                                    <input type="text" class="form-control" required name="title" value="{{$profile->title}}">
                                </div>

                                <div class="input-group input-group-static mb-4" style="padding-left: 15px; padding-right: 15px;">
                                    <label>Specialization</label>
                                    <input type="text" class="form-control" required name="specialization" value="{{$profile->specialization}}">
                                </div>

                                <div class="input-group input-group-static mb-4" style="padding-left: 15px; padding-right: 15px;">
                                    <input type="submit" class="btn btn-sm bg-gradient-info" name="Edit Profile" value="Edit Profile"/>
                                </div>
                            </form>
                        </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div></div>
@endsection
