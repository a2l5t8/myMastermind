<?php

namespace App\Http\Controllers;

use App\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function show()
    {
        $plan = Plan::find(1);
        return view('show',compact('plan'));
    }
}
