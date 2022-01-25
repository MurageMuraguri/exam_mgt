@extends('layouts.dashApp')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-10">
                <div class="row" >
                    <div class="col-lg-6 col-md-6 mt-4 mb-4">
                        <div class="card z-index-2 ">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">

                            </div>
                            <div class="card-body">
                                <h6 class="mb-0 ">Website Views</h6>
                                <p class="text-sm ">Last Campaign Performance</p>
                                <hr class="dark horizontal">
                                <div class="d-flex ">
                                    <i class="material-icons text-sm my-auto me-1">schedule</i>
                                    <p class="mb-0 text-sm"> campaign sent 2 days ago </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mt-4 mb-4">
                        <div class="card z-index-2  ">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">

                            </div>
                            <div class="card-body">
                                <h6 class="mb-0 "> Daily Sales </h6>
                                <p class="text-sm "> (<span class="font-weight-bolder">+15%</span>) increase in today sales. </p>
                                <hr class="dark horizontal">
                                <div class="d-flex ">
                                    <i class="material-icons text-sm my-auto me-1">schedule</i>
                                    <p class="mb-0 text-sm"> updated 4 min ago </p>
                                </div>
                            </div>
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
                            </select>
                        </div>
                            <div class="input-group input-group-static mb-4" style="padding-left: 15px; padding-right: 15px;">
                            <div class="text-center">
                                <input type="submit" class="btn btn-md bg-gradient-info" name="Send registration email" value="Send registration email"></input>
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
