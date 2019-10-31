<?php

namespace App\Http\Controllers;

use App\Courseid;
use App\Student;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Stripe\Charge;
use Stripe\Stripe;

class StudentController extends Controller
{
    public function register_form()
    {
        if (isset(Auth::user()->username))
        {
            return redirect('/student/dashboard');
        }
        return view('student.register');
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

        Auth::login($user);

        $student = $user->student()->create([
            'user_id' => $user->id
        ]);

        $student->courses()->attach(Courseid::where('cid',$request->courseid)->first()->id, ['start_time' => Carbon::now(),'is_active' => 0]);

        return redirect('/student/'.$request->courseid.'/pay/stripe');
    }

    public function stripe($cid)
    {
        return view('student.stripee',compact('cid'));
    }

    public function stripePayment(Request $request,$cid)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        try {
            Charge::create([
                "amount" => 12 * 100,
                "currency" => 'usd',
                'source' => $request->stripeToken,
                'description' => "Course Activation Payment",

            ]);
            Auth::user()->student->courses()->updateExistingPivot(Courseid::where('cid',$cid)->first()->id, ['is_active'=>1,'start_time'=>Carbon::now()]);

            \Session::flash('success-message', "Payment Done Successfully");
            return redirect()->route('student.dashboard');
        }catch ( \Exception $e) {
            dd($e);
            \Session::flash('fail-message', "Please try again");
            return \Redirect::back();
        }
    }

    public function dashboard()
    {
        return view('student.index');
    }
}
