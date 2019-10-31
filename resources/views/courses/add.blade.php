@extends('teacher.dashboard')
@section('content')
    <div class="container-fluid page__container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="instructor-dashboard.html">Home</a></li>
            <li class="breadcrumb-item"><a href="instructor-courses.html">Courses</a></li>
            <li class="breadcrumb-item active">Edit course</li>
        </ol>
        <form action="{{ route('courses.add') }}" method="POST">
            @csrf
        <div class="media align-items-center mb-headings">
            <div class="media-body">
                <h1 class="h2">Add Course</h1>
            </div>
            <div class="media-right">
                <input type="submit" class="btn btn-success" value="SAVE">
            </div>
        </div>

            <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Course Information</h4>
                    </div>
                    <div class="card-body">

                        <div class="form-group">
                            <label class="form-label" for="title">Title</label>
                            <input type="text" name="name" id="title" class="form-control" placeholder="Write a title" >
                        </div>

                        <div class="form-group mb-0">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control" rows="4" placeholder="Enter Course Description"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Meta</h4>
                        <p class="card-subtitle">Extra Options </p>
                    </div>

                    <form class="card-body" action="#">
                        <div class="form-group" style="padding: 15px">
                            <label class="form-label" for="category">Category</label>
                            <select name="category" id="category" class="custom-select form-control">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
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
