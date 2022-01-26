@extends('layouts.dashApp1')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2">



            </div>
            <div class="col-10">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-info shadow-info border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Your incoming deadlines</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Exam Date</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Deadline</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Task</th>

                                </tr>
                                </thead>
                                <tbody>
                                @if(!$deadlines)
                                    No deadline as of now
                                @endif
                                @foreach($deadlines as $deadline)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h5 class="mb-0 text-sm">{{$deadline->name}}</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h5 class="mb-0 text-sm">{{$deadline->exam_date}}</h5>

                                        </td>
                                        <td class="align-middle text-center">
                                            <h5 class="mb-0 text-sm">{{$deadline->lecturer_deadline_1}}</h5>
                                        </td>
                                        <td class="align-middle text-center">
                                            <h5 class="mb-0 text-sm">Submission of first examination draft</h5>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h5 class="mb-0 text-sm">{{$deadline->name}}</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h5 class="mb-0 text-sm">{{$deadline->exam_date}}</h5>

                                        </td>
                                        <td class="align-middle text-center">
                                            <h5 class="mb-0 text-sm">{{$deadline->lecturer_deadline_2}}</h5>
                                        </td>
                                        <td class="align-middle text-center">
                                            <h5 class="mb-0 text-sm">Submission of final reviewed and corrected examination</h5>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
