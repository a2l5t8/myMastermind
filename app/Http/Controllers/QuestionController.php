<?php

namespace App\Http\Controllers;

use App\Assignment;
use App\Courseid;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','activation'])->except(['studentQuestion','studentAnswer','answer']);
    }

    public function index($cid,$assignment_id)
    {
        $course = Courseid::where('cid',$cid)->first();
        $assignment = Assignment::find($assignment_id);
        $questions = Question::where('assignment_id',$assignment_id)->get();

        return view('courses.assignments.questions.index',compact(['course','assignment','questions']));
    }

    public function add_form($cid,$assignment_id)
    {
        $course = Courseid::where('cid',$cid)->first();
        $assignment = Assignment::find($assignment_id);

        return view('courses.assignments.questions.add',compact(['course','assignment']));
    }

    public function add(Request $request,$cid,$assignment_id)
    {
        $assignment = Assignment::find($assignment_id);

        $question = $assignment->questions()->create([
           'text' => $request->text,
           'answer' => $request->answer,
           'type' => $request->type,
           'choices'  => $request->choices
        ]);

        return redirect('/teacher/courses/'.$cid.'/assignments/'.$assignment_id.'/questions');
    }

    public function studentQuestion($cid,$assignment_id)
    {
        $course = Courseid::where('cid',$cid)->first();
        $assignment = Assignment::find($assignment_id);
        $questions = $assignment->questions->diff(Auth::user()->student->questions);

        return view('student.course.question.index',compact(['course','assignment','questions']));
    }

    public function studentAnswer($cid, $assignment_id, $question_id)
    {
        $course = Courseid::where('cid',$cid)->first();
        $assignment = Assignment::find($assignment_id);
        $question = Question::find($question_id);

        return view('student.course.question.answer',compact(['course','assignment','question']));
    }

    public function answer(Request $request, $cid, $assignment_id, $question_id)
    {
        $course = Courseid::where('cid',$cid)->first();
        $assignment = Assignment::find($assignment_id);
        $question = Question::find($question_id);

        if($question->answer == $request->answer)
        {
            Auth::user()->student->questions()->attach($question_id, ['answered'=>1]);
        }else if($question->answer != $request->answer)
        {
            Auth::user()->student->questions()->attach($question_id, ['answered'=>0]);
        }

        return redirect()->route('student.assignment.questions',['cid'=>$cid,'assignment_id'=>$assignment_id]);
    }
}
