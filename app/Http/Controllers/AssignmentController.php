<?php

namespace App\Http\Controllers;

use App\Assignment;
use App\Courseid;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function __construct()
    {
        return $this->middleware(['auth','activation']);
    }

    public function add_form($cid)
    {
        $course = Courseid::where('cid',$cid)->first();
        return view('courses.assignments.add',compact('course'));
    }

    public function add(Request $request,$cid)
    {
        $course = Courseid::where('cid',$cid)->first();
        $assignment = $course->assignments()->create([
            'course_id' => $course->course->id,
            'name' => $request->name,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time
        ]);

        return redirect('/teacher/courses/'.$course->cid.'/main');
    }
}
