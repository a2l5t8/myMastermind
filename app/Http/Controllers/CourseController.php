<?php

namespace App\Http\Controllers;

use App\Category;
use App\Course;
use App\Courseid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware(['activation','auth'])->except(['studentIndex','studentCourse']);
    }

    public function index()
    {
        $courses = Course::paginate(6);
        return view('courses.index',compact('courses'));
    }

    public function add_form()
    {
        $categories = Category::all();
        return view('courses.add',compact('categories'));
    }

    public function add(Request $request)
    {
        $category = Category::find($request->category);
        $course = $category->courses()->create([
            'course_identifier' => $category->name.Str::random(4).'T='.Auth::user()->username.Str::random(4),
            'name' => $request->name,
            'price' => 12,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'teacher_id' => Auth::user()->teacher->id,
            'description' => $request->description
        ]);

        return redirect('/teacher/courses/index');
    }

    public function studentIndex()
    {
        $courses = Auth::user()->student->courses;
        return view('student.course.index',compact('courses'));
    }

    public function studentCourse($cid)
    {
        $course = Courseid::where('cid',$cid)->first();
        return view('student.course.show',compact('course'));
    }
}
