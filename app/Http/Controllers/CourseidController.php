<?php

namespace App\Http\Controllers;

use App\Courseid;
use Illuminate\Http\Request;

class CourseidController extends Controller
{
    public function find(Request $request)
    {
        $courseid = Courseid::where('cid',$request->courseid)->first();
        if (isset($courseid->cid))
        {
            $courseid = Courseid::where('cid',$request->courseid)->with(['teacher','course'])->first();
        }
        return response()->json($courseid);
    }
}
