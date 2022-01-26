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
                            <h6 class="text-white text-capitalize ps-3">{{$exam_period}}</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Exam Period</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Exam Date</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Lecturer</th>

                                </tr>
                                </thead>
                                <tbody>
                                @if(!$exams)
                                    No exams yet
                                @endif
                                @foreach($exams as $exam)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h5 class="mb-0 text-sm">{{$exam->name}}</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h5 class="mb-0 text-sm">{{$exam_period}}</h5>

                                        </td>
                                        <td class="align-middle text-center">
                                            <h5 class="mb-0 text-sm">{{$exam->exam_date}}</h5>
                                        </td>
                                        <td class="align-middle text-center">
                                            <h5 class="mb-0 text-sm">{{$exam->first_name}} {{$exam->last_name}}</h5>
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
