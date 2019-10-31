@extends('teacher.dashboard')
@section('content')
    <?php
        function show($text)
        {
            $text = explode(" ==> ",$text);
            return $text[0];
        }
    ?>
    <div class="container-fluid page__container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="instructor-dashboard.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Courses</a></li>
            <li class="breadcrumb-item"><a href="#">Assignments</a></li>
            <li class="breadcrumb-item active">Questions</li>
        </ol>

        <div class="d-flex flex-column flex-sm-row flex-wrap mb-headings align-items-start align-items-sm-center">
            <div class="flex mb-2 mb-sm-0">
                <h1 class="h2">Manage Questions</h1>
            </div>
            <a href="{{ route('questions.add_form',['assignment_id'=>$assignment->id,'cid'=>$course->cid]) }}" class="btn btn-success">Add questions</a>
        </div>


        @if(count($questions)==0)
        <div class="alert alert-light alert-dismissible border-1 border-left-3 border-left-warning" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="text-black-70">Ohh no! No questions to display. Add some questions.</div>
        </div>

        @else
        <div class="row">
            @foreach($questions as $key=>$question)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">

                            <div class="d-flex flex-column flex-sm-row">
                                <div class="flex" style="min-width: 200px;">
                                    <!-- <h5 class="card-title text-base m-0"><a href="instructor-course-edit.html"><strong>Learn Vue.js</strong></a></h5> -->
                                    <h4 class="card-title mb-1"><a href="instructor-course-edit.html">Question {{ $key+1 }}</a></h4>
                                    <p class="text-black-70">{{ \Illuminate\Support\Str::limit(show($question->text),30) }}</p>
                                    <div class="d-flex align-items-end">
                                        <div class="d-flex flex flex-column mr-3">
                                            <div class="d-flex align-items-center py-1">
                                                <small class="text-muted mr-2">{{ $course->course->category->name }}</small>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <a href="#" class="btn btn-sm btn-success" >Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @endif
    </div>
@endsection
