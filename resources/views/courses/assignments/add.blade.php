@extends('teacher.dashboard')
@section('content')
    <div class="container-fluid page__container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="instructor-dashboard.html">Home</a></li>
            <li class="breadcrumb-item"><a href="instructor-courses.html">Courses</a></li>
            <li class="breadcrumb-item active">Add Assignment</li>
        </ol>
        <form action="{{ route('assignment.add',['cid'=>$course->cid]) }}" method="POST">
            @csrf
            <div class="media align-items-center mb-headings">
                <div class="media-body">
                    <h1 class="h2">Add Assignment</h1>
                </div>
                <div class="media-right">
                    <input type="submit" class="btn btn-success" value="ADD">
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Assignment Info</h4>
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label class="form-label" for="title">Title</label>
                                <input type="text" name="name" id="title" class="form-control" placeholder="Write a title" >
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Meta</h4>
                            <p class="card-subtitle">Timing Function</p>
                        </div>

                        <form class="card-body" action="#">
                            <div class="form-group" style="padding: 15px">
                                <label class="form-label" for="start">Start Date</label>
                                <input id="start" name="start_time" type="date" class="form-control" data-toggle="flatpickr" placeholder="e.g. 01/28/2016">
                            </div>
                            <div class="form-group" style="padding: 15px">
                                <label class="form-label" for="end">End Date</label>
                                <input id="end" name="end_time" type="date" class="form-control"  data-toggle="flatpickr" placeholder="e.g. 01/28/2017">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
