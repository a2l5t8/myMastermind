@extends('student.dashboard')
@section('assets')
    <link rel="stylesheet" href="https://unpkg.com/mathlive/dist/mathlive.core.css">
    <link rel="stylesheet" href="https://unpkg.com/mathlive/dist/mathlive.css">
@endsection
@section('content')
    <div class="container-fluid page__container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="instructor-dashboard.html">Home</a></li>
            <li class="breadcrumb-item"><a href="instructor-courses.html">Courses</a></li>
            <li class="breadcrumb-item active">Add Questions</li>
        </ol>
        <form action="{{ route('student.assignment.question.answer',['assignment_id'=>$assignment->id,'cid'=>$course->cid,'question_id'=>$question->id]) }}" method="POST">
            @csrf
            <div class="media align-items-center mb-headings">
                <div class="media-body">
                    <h1 class="h2">Answer Question</h1>
                </div>
                <div class="media-right">
                    <input type="submit" class="btn btn-success" value="Submit">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Question Info</h4>
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label class="form-label" for="title">Question text</label>
                                <br>
                                <div>{!!  $question->text !!} </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="title">Answer</label>
                                <input id="answer"  type="hidden" name="answer"  class="form-control" placeholder="Write the answer" />
                                <br>
                                <div id="mathfield2">f(x)</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
        var myElement2 = document.getElementById('mathfield2');
        var moreAnswer = document.getElementById('moreAnswer');
        if(window.addEventListener) {
            // Normal browsers
            myElement2.addEventListener('DOMSubtreeModified', contentChanged2, false);
        } else
        if(window.attachEvent) {
            // IE
            myElement2.attachEvent('DOMSubtreeModified', contentChanged2);
        }

        function contentChanged2() {
            // this function will run each time the content of the DIV changes
            var myElement2 = document.getElementById('mathfield2');
            document.getElementById('answer').value = myElement2.innerHTML;
            console.log(document.getElementById('answer').value)
        }
    </script>
@endsection
@section('script')
    <script src="https://unpkg.com/mathlive"></script>
    <script type="module">
        MathLive.makeMathField(document.getElementById('mathfield2'),{
            virtualKeyboardMode : 'onfocus'
        });
    </script>
@endsection
