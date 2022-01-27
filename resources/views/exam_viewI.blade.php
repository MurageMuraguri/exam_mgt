@extends('layouts.dashApp3')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-1">



            </div>
            <div class="col-10">
    <div class="card">
        <div class="card-header pb-0 px-3">
            <strong><u>EXAM: </u></strong><h6 class="mb-0">{{$exam_details->name}}</h6>
            <h5 class="mb-0">{{$exam_details->exam_date}}</h5>
        </div>
        <div class="card-body pt-4 p-3">
            <ul class="list-group">
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                    <div class="d-flex flex-column">
                        <form method="POST" enctype="multipart/form-data" id="upload-file" action="{{ url('submit_lec') }}" >
                            @csrf
                            <div class="input-group input-group-static mb-4" style="padding-left: 15px; padding-right: 15px;">
                                <label>Upload Submission</label>
                                <input type="file" class="form-control" required name="submission" placeholder="">
                            </div>
                            <input type="hidden"  name="exam_id" value="{{$exam_details->id}}">
                            <input type="hidden"  name="lecturer_id" value="{{$exam_details->lecturer_id}}">
                            <input type="hidden"  name="external_examiner_id" value="{{$exam_details->external_examiner_id}}">
                            <input type="hidden" name="uploaded_by" value="{{$exam_details->lecturer_id}}">

                            <div class="input-group input-group-static mb-4" style="padding-left: 15px; padding-right: 15px;">
                                <div class="text-center">
                                    <input type="submit" class="btn btn-sm bg-gradient-info" name="Upload" value="Upload"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

            </ul>
        </div>
        @if(!$submissions)
            <h4>No submission made yet</h4>
        @else
            @foreach($submissions as $submission)
        <div class="card-body pt-4 p-3">
            <ul class="list-group">
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                    <div class="d-flex flex-column">
                        <h6 class="mb-3 text-sm">File uploaded on: {{$submission->created_at}}. <a href="{{url($submission->location)}}">Download</a></h6>
                        </div>
                </li>

            </ul>
        </div>
            @endforeach
            @endif
    </div>
            </div>
        </div>
    </div>
@endsection
