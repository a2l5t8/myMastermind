@extends('teacher.dashboard')
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
        <form action="{{ route('questions.add',['assignment_id'=>$assignment->id,'cid'=>$course->cid]) }}" method="POST">
            @csrf
            <div class="media align-items-center mb-headings">
                <div class="media-body">
                    <h1 class="h2">Add Question</h1>
                </div>
                <div class="media-right">
                    <input type="submit" class="btn btn-success" value="ADD">
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Question Info</h4>
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label class="form-label" for="title">Question text</label>
                                <input id="text" type="hidden" rows="4" name="text" class="form-control" placeholder="Write the questions` text" >
                                <br>
                                <input type="text" id="moreText" style="border :0;width : 100%" placeholder="enter the question text [ enter mathematical symbols below]"><div id="mathfield">f(x)</div>
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

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Meta</h4>
                            <p class="card-subtitle">Question Options</p>
                        </div>

                        <form class="card-body" action="#">
                            <div class="form-group" style="padding: 15px">
                                <label class="form-label" for="type">Answer Type</label>
                                <select onchange="typeChange()" id="type" name="type" class="custom-select form-control">
                                    <option value="number">Single Number</option>
                                    <option value="choice">Choices</option>
                                </select>
                            </div>

                            <div class="form-group" style="padding: 15px;display: none" id="choice_container">
                                <label class="form-label" for="choices">Choices</label>
                                <textarea type="text" rows="3" name="choices" id="choices" class="form-control" placeholder="Write each choice in one line" ></textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>

        function  typeChange() {
            var type = document.getElementById('type');
            let choice_container = document.getElementById('choice_container');
            choice_container.style.display = "none";
            // choice needed
            if (type.selectedIndex === 1)
            {
                choice_container.style.display = "block";
            }
        }

        var myElement = document.getElementById('mathfield');
        var moreElement = document.getElementById('moreText');
        if(window.addEventListener) {
            // Normal browsers
            myElement.addEventListener('DOMSubtreeModified', contentChanged, false);
        } else
        if(window.attachEvent) {
            // IE
            myElement.attachEvent('DOMSubtreeModified', contentChanged);
        }

        function contentChanged() {
            // this function will run each time the content of the DIV changes
            var myElement = document.getElementById('mathfield');
            document.getElementById('text').value = moreElement.value + " ==> " + myElement.innerHTML;
            console.log("TEXT !!!");
            console.log(document.getElementById('text').value);
        }








        var myElement2 = document.getElementById('mathfield2');
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
            console.log("ANSWER !!!");
            console.log(document.getElementById('answer').value);
        }
    </script>
@endsection
@section('script')
    <script src="https://unpkg.com/mathlive"></script>
    <script type="module">
        MathLive.makeMathField(document.getElementById('mathfield'),{
            virtualKeyboardMode : 'onfocus'
        });

        MathLive.makeMathField(document.getElementById('mathfield2'),{
            virtualKeyboardMode : 'onfocus'
        });
    </script>
@endsection
