@extends('layouts.dashApp2')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2">



            </div>
            <div class="col-10">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-info shadow-info border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Examination Assignments</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Exam Date</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
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
                                                        <h5 class="mb-0 text-sm">{{$exam->exam_date}}</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h5 class="mb-0 text-sm">
                                                            @if($exam->status == 0)
                                                                pre-approval
                                                            @endif
                                                            Approved
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a type="button" href="{{URL::to('e_view_exam/')}}{{'/'.$exam->id}}" class="btn btn-sm bg-gradient-info">View</a>
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
@endsection
