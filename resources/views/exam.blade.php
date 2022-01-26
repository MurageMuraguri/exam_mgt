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
                                    <th class="text-secondary opacity-7"></th>
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
                                    <td class="align-middle">
                                        <ul class=" px-1 py-2 me-sm-n3 show" aria-labelledby="dropdownMenuButton" data-bs-popper="none">
                                            <li class="mb-1">
                                                <div class="d-flex py-1">
                                                    <a class="dropdown-item border-radius-sm" href="http://localhost:8000/profile">
                                                        Add Supevisors
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="mb-1" style="padding-left: 5px">
                                                <a class="dropdown-item border-radius-sm" href="{{URL::to('exams/delete')}}{{'/'.$exam->id}}">
                                                     Delete
                                                </a>
                                                <form id="logout-form" action="http://localhost:8000/logout" method="POST" class="d-none">
                                                    <input type="hidden" name="_token" value="c4KFqZmLGmre07bT4a272ioQZH5eL0cpDqhflkCI">                                                </form>

                                            </li>

                                        </ul>
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
    <div class="container">
        <div class="row">

            <div class="col-md-2"></div>
            <div class="col-md-10">
                <div class="p-4 bg-light">
                    <form  enctype="multipart/form-data" role="form" method="POST" action="{{ route('insert_exam') }}">
                        @csrf
                        <div class="card mt-4">
                            <!-- Card image -->
                            <div class="card-header p-0 position-relative">
                                <h5 class="card-title text-center" style="padding-top: 6px;">Add examination</h5>
                            </div>
                            <!-- Card body -->
                            <div class="card-body" style="padding-top: 8px;">


                                <div class="input-group input-group-static mb-4" style="padding-left: 15px; padding-right: 15px;">
                                    <label>Exam Name</label>
                                    <input type="text" class="form-control" required name="name">
                                </div>
                                <div class="input-group input-group-static mb-4" style="padding-left: 15px; padding-right: 15px;">
                                    <label>Examination Period</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="period">
                                        @foreach($periods as $period)
                                        <option value="{{$period->id}}">{{$period->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="input-group input-group-static mb-4" style="padding-left: 15px; padding-right: 15px;">
                                    <label>Exam date</label>
                                    <input type="date" class="form-control" required name="date">
                                </div>
                                <div class="input-group input-group-static mb-4" style="padding-left: 15px; padding-right: 15px;">
                                    <label>Internal Lecturer</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="lec">
                                        @foreach($lecturers as $lecturer)
                                        <option value="{{$lecturer->id}}">{{$lecturer->first_name}} {{$lecturer->last_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="input-group input-group-static mb-4" style="padding-left: 15px; padding-right: 15px;">
                                    <label>First Draft deadline</label>
                                    <input type="date" class="form-control" required name="deadline_1">
                                </div>
                                <div class="input-group input-group-static mb-4" style="padding-left: 15px; padding-right: 15px;">
                                    <label>Final Draft deadline</label>
                                    <input type="date" class="form-control" required name="deadline_2">
                                </div>
                                <div class="input-group input-group-static mb-4" style="padding-left: 15px; padding-right: 15px;">
                                    <label>External Examiner</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="examiner">
                                        @foreach($examiners as $examiner)
                                            <option value="{{$examiner->id}}">{{$examiner->first_name}} {{$examiner->last_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="input-group input-group-static mb-4" style="padding-left: 15px; padding-right: 15px;">
                                    <label>Review deadline</label>
                                    <input type="date" class="form-control" required name="deadline_3">
                                </div>
                                <div class="input-group input-group-static mb-4" style="padding-left: 15px; padding-right: 15px;">
                                    <div class="text-center">
                                        <input type="submit" class="btn btn-md bg-gradient-info" name="Create examination period" value="Create"/>
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
