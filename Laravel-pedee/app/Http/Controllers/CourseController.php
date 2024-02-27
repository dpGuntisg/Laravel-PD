<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function store(Request $request){
        $validate = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'banner_url' => 'required|url',
            'participant_count' => 'required|integer',
        ]);
        $course = Course::create($validate);
            return response()->json(['message'=>'Course created succsessfufunluy', 'data'=>$course],201);
    }

    public function index(){
        $courses = Course::all();
        return response()->json(['data' => $courses]);
    }
}
