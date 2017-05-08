<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $courses = DB::table('time_courses')
            ->join('courses', 'time_courses.course_id', '=', 'courses.id')
            ->join('type_classes', 'courses.type_class_id', '=', 'type_classes.id')
            ->select('type_classes.id', 'courses.id', 'type_classes.name',
                     'type_classes.description', 'type_classes.price',
                     'time_courses.day',
                     'time_courses.startTime',
                     'time_courses.endTime')
            ->orderBy('time_courses.startTime')
            ->get();
      return [
          'success' => true,
          'data' => $courses
      ];
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
      //{typeClassID:1, data:[]}
      $typeClassID = intval(trim($request->typeClassID));
      $trainerID = intval(trim($request->trainerID));
      $day = $request->day;
      $startTime = $request->startTime;
      $endTime = $request->endTime;

      $course = new \App\Course;
      $course->type_class_id = $typeClassID;
      $course->trainer_id = $trainerID;
      $course->save();

      for($n = 0 ; $n < sizeof($startTime) ; $n++){
        $timeCourse = new \App\TimeCourse;
        $timeCourse->course_id = $course->id;
        $timeCourse->day = $day[$n];
        $timeCourse->startTime = $startTime[$n];
        $timeCourse->endTime = $endTime[$n];
        $timeCourse->save();
      }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
