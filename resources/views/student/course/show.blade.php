@extends('student.dashboard')
@section('content')
    <div class="container-fluid page__container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" style="display: inline-block">Course ID : <span style="color : black">{{ $course->cid }}</span></h4>
                        <h4 class="card-title right" style="float : right">Assignments</h4>
                    </div>
                    <div class="card-body">
                        <div class="nestable" id="nestable-handles-primary">
                            <ul class="nestable-list">
                                @foreach($course->assignments as $assignment)
                                    <li class="nestable-item nestable-item-handle" data-id="0">
                                        <div class="nestable-handle"><i class="material-icons">menu</i></div>
                                        <div class="nestable-content">
                                            <div class="media align-items-center">

                                                <div class="media-body">
                                                    <h5 class="card-title h6 mb-0">
                                                        <a href="instructor-lesson-add.html">{{$assignment->name}}</a>
                                                    </h5>
                                                    <small class="text-muted">{{$assignment->created_at->diffForHumans(\Carbon\Carbon::now())}}</small>
                                                </div>
                                                <div class="media-right">
                                                    <a href="{{ route('student.assignment.questions',['cid'=>$course->cid,'assignment_id'=>$assignment->id]) }}" class="btn btn-outline-primary btn-sm">enter</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
