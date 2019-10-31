<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/user/login','Auth\LoginController@loginForm')->name('user.login');

// Students Access
Route::get('/register/student','StudentController@register_form');


// Teachers
// Access
Route::get('teacher/register','TeacherController@register_form')->name('teacher.register_form');
Route::post('teacher/register','TeacherController@register')->name('teacher.register');
Route::prefix('/teacher')->middleware(['auth','isTeacher'])->group(function() {

    // Dashboard
    Route::get('/dashboard','TeacherController@dashboard')->name('teacher.dashboard');

    // Courses
    Route::prefix('/courses')->group(function() {
        Route::get('/index','CourseController@index')->name('courses.index');

        // add a course
        Route::get('/add','CourseController@add_form')->name('courses.add_form');
        Route::post('/add','CourseController@add')->name('courses.add');

        // enroll in a course as a teacher
        Route::post('/{course_identifier}/enroll','TeacherController@enroll')->name('teacher.course.enroll');

        Route::get('/{cid}/main','TeacherController@course')->name('course.main');
        Route::prefix('/{cid}/assignments')->group(function(){
            // add Assignments
            Route::get('/add','AssignmentController@add_form')->name('assignment.add_form');
            Route::post('/add','AssignmentController@add')->name('assignment.add');

            // show all questions
            Route::get('{assignment_id}/questions','QuestionController@index')->name('assignment.questions');
            Route::prefix('/{assignment_id}/questions')->group(function(){
                // add questions
                Route::get('/add','QuestionController@add_form')->name('questions.add_form');
                Route::post('/add','QuestionController@add')->name('questions.add');
            });
        });
    });


    Route::post('activate','TeacherController@activate');
});

// student
Route::get('/student/register','StudentController@register_form')->name('student.register_form');
Route::post('/student/register','StudentController@register')->name('student.register');
Route::prefix('/student')->middleware(['auth','isStudent'])->group(function() {


    // course activation payment
    Route::get('{cid}/pay/stripe','StudentController@stripe')->name('stripe');
    Route::post('{cid}/pay/stripepayment','StudentController@stripePayment')->name('stripePayment');

    Route::get('/dashboard','StudentController@dashboard')->name('student.dashboard');
    Route::get('/courses','CourseController@studentIndex')->name('student.courses');
    Route::prefix('/courses')->group(function() {
        Route::get('{cid}/main','CourseController@studentCourse')->name('student.courses.main');
        Route::get('{cid}/assignments/{assignment_id}/questions','QuestionController@studentQuestion')->name('student.assignment.questions');

        // answering questions
        Route::get('{cid}/assignments/{assignment_id}/questions/{question_id}','QuestionController@studentAnswer')->name('student.assignment.question.answer_form');
        Route::post('{cid}/assignments/{assignment_id}/questions/{question_id}','QuestionController@answer')->name('student.assignment.question.answer');
    });
});

// finding a course that is searched by a student in registration process
Route::get('/courseid','CourseidController@find')->name('courseid.find');

