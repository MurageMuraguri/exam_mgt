@extends('layouts.dashApp')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2">



            </div>
            <div class="col-10">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-info shadow-info border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Users</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">First Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Last Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Title</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Role</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                @if(!$users)
                                    No exams yet
                                @else

                                    <tr>
                                        @foreach($users as $user)
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h5 class="mb-0 text-sm">{{$user->first_name}}</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h5 class="mb-0 text-sm">{{$user->last_name}}</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h5 class="mb-0 text-sm">
                                                            {{$user->title}}
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h5 class="mb-0 text-sm">
                                                            {{$user->email}}
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h5 class="mb-0 text-sm">
                                                            @switch($user->role)
                                                                @case(0)
                                                                Internal Lecturer
                                                                @break
                                                                @case(1)
                                                                External Examiner
                                                                @break
                                                                @case(2)
                                                                Examination Officer
                                                                @break
                                                                @default
                                                                Administrator
                                                                @endswitch
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a type="button" class="btn btn-sm bg-gradient-danger"  href="{{URL::to('user/delete')}}{{'/'.$user->id}}">Delete</a>
                                            </td>
                                    </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="row">

            <div class="col-md-2"></div>
            <div class="col-md-10">
                <div class="p-4 bg-light">
                    <form  enctype="multipart/form-data" role="form" method="POST" action="{{ route('Users_officer') }}">
                        @csrf
                        <div class="card mt-4">
                            <!-- Card image -->
                            <div class="card-header p-0 position-relative">
                                <h5 class="card-title text-center" style="padding-top: 6px;">Create new Internal Lecturer and External Examiner Users</h5>
                            </div>
                            <!-- Card body -->
                            <div class="card-body" style="padding-top: 8px;">


                        <div class="input-group input-group-static mb-4" style="padding-left: 15px; padding-right: 15px;">
                            <label>Email</label>
                            <input type="email" class="form-control" required name="email">
                        </div>
                        <div class="input-group input-group-static mb-4" style="padding-left: 15px; padding-right: 15px;">
                            <label for="FormControlSelect">User Role</label>
                            <select  multiple="" class="form-control" id="exampleFormControlSelect" name="role" required>
                                <option value="1">External Examiner</option>
                                <option value="0">Internal Lecturer</option>
                                <option value="2">Examination Officer</option>
                            </select>
                        </div>
                            <div class="input-group input-group-static mb-4" style="padding-left: 15px; padding-right: 15px;">
                            <div class="text-center">
                                <input type="submit" class="btn btn-md bg-gradient-info" name="Send registration email" value="Send registration email"/>
                            </div>
                            </div>
                            </div></div>
                    </form>
                        </div>

                </div>
                </div>
                </div>
                </div>
            </div>
        </div>


    </div>
@endsection
