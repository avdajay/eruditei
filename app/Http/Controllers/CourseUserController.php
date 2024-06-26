<?php

namespace App\Http\Controllers;

use App\CourseUser;
use App\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CourseUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = Course::where('code', $request->code)->get();
        $courseUser = new CourseUser();
        $courseUser->course_id = $course;
        $courseUser->user_id = Auth::id();

        return redirect()->route('courses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CourseUser  $courseUser
     * @return \Illuminate\Http\Response
     */
    public function show(CourseUser $courseUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CourseUser  $courseUser
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseUser $courseUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CourseUser  $courseUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseUser $courseUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CourseUser  $courseUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseUser $courseUser)
    {
        //
    }
}
