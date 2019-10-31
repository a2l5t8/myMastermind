<?php

namespace App\Http\Controllers;

use App\Assignment;
use App\Course;
use App\Courseid;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->except(['register','register_form']);
    }

    public function dashboard()
    {
        return view('teacher.dashboard.home');
    }

    public function register_form()
    {
        return view('teacher.register');
    }

    public function register(Request $request)
    {
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
            'gender' => $request->gender
        ]);


        $teacher = $user->teacher()->create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'age' => $request->age,

            'continent' => $request->continent,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'address' => $request->address,

            'institution' => $request->institution,
            'department' => $request->department,
            'discipline' => $request->discipline,

            'access_code' => Str::random(42),
            'is_active' => false,
        ]);

        Auth::login($user);

        return redirect('/teacher/dashboard');
    }

    public function enroll(Request $request,$course_identifier)
    {
        $course = Course::where('course_identifier',$course_identifier)->first();
        $courseID = Courseid::create([
           'cid' => Auth::user()->last_name.Str::random(5).$course->category->name.Str::random(5),
           'teacher_id' => Auth::user()->teacher->id,
           'course_id' => $course->id
        ]);

        return redirect('/teacher/courses/'.$courseID->cid.'/main');
    }

    public function course($cid)
    {
        $course = Courseid::where('cid',$cid)->first();
        $assignments = $course->assignments;

        return view('courses.course_detail',compact(['course','assignments']));

    }
}
