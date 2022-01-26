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
                            <h6 class="text-white text-capitalize ps-3">Examination Periods</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Academic year</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Start Date</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">End Date</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                @if(!$exams)
                                    No exams yet
                                @else

                                    <tr>
                                        @foreach($exams as $exam)
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h5 class="mb-0 text-sm">{{$exam->name}}</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h5 class="mb-0 text-sm">{{$exam->academic_year}}</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h5 class="mb-0 text-sm">
                                                            {{$exam->start_date}}
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h5 class="mb-0 text-sm">
                                                            {{$exam->end_date}}
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a type="button" class="btn btn-sm bg-gradient-danger"  href="{{URL::to('exam_period/delete')}}{{'/'.$exam->id}}">Delete</a>
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
                    <form  enctype="multipart/form-data" role="form" method="POST" action="{{ route('create_exam_period') }}">
                        @csrf
                        <div class="card mt-4">
                            <!-- Card image -->
                            <div class="card-header p-0 position-relative">
                                <h5 class="card-title text-center" style="padding-top: 6px;">Create examination periods</h5>
                            </div>
                            <!-- Card body -->
                            <div class="card-body" style="padding-top: 8px;">


                                <div class="input-group input-group-static mb-4" style="padding-left: 15px; padding-right: 15px;">
                                    <label>Period Name</label>
                                    <input type="text" class="form-control" required name="name">
                                </div>
                                <div class="input-group input-group-static mb-4" style="padding-left: 15px; padding-right: 15px;">
                                    <label>Session</label>
                                    <input type="text" class="form-control" required name="session">
                                </div>
                                <div class="input-group input-group-static mb-4" style="padding-left: 15px; padding-right: 15px;">
                                    <label>Academic Year</label>
                                    <input type="text" class="form-control" required name="year">
                                </div>
                                <div class="input-group input-group-static mb-4" style="padding-left: 15px; padding-right: 15px;">
                                    <label>Start Month/Year</label>
                                    <input type="date" class="form-control" required name="start">
                                </div>
                                <div class="input-group input-group-static mb-4" style="padding-left: 15px; padding-right: 15px;">
                                    <label>End Month/Year</label>
                                    <input type="date" class="form-control" required name="end">
                                </div>

                                <div class="input-group input-group-static mb-4" style="padding-left: 15px; padding-right: 15px;">
                                    <div class="text-center">
                                        <input type="submit" class="btn btn-md bg-gradient-info" name="Create examination period" value="Create examination period"/>
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
