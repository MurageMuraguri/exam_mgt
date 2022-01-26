@extends('layouts.dashApp')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-10">
                <div class="row" >
                    <div class="col-lg-8 col-md-8 mt-4 mb-4">

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
