<?php

namespace App\Http\Controllers\Api;

use \stdClass;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $customers = \App\Customer::all();
      $normalCus = DB::table('normal_customers')
                    ->whereDate('expire', '>=', Carbon::now())
                    ->get();
      $courseCus = DB::table('course_customers')
                    ->join('courses', 'course_customers.course_id', '=', 'courses.id')
                    ->join('type_classes', 'courses.type_class_id', '=', 'type_classes.id')
                    ->select('course_customers.customer_id', 'type_classes.name')
                    ->get();
      $vipCus = DB::table('v_i_p_customers')
                    ->where('count', '>', 0)
                    ->get();
      $mapNor = array();
      $mapCou = array();
      $mapVIP = array();
      foreach ($normalCus as $n) {
        array_push($mapNor,$n->customer_id);
      }
      foreach ($courseCus as $n) {
        $mapCou[$n->customer_id] = $n->name;
      }
      foreach ($vipCus as $n) {
        array_push($mapVIP,$n->customer_id);
      }
      $tmpCus = array();
      foreach ($customers as $c) {
        $tmp = new \stdClass();
        $tmp->id = $c->id;
        $tmp->name = $c->name;
        $tmp->tel = $c->tel;
        $tmp->normal = (in_array($c->id, $mapNor) ? true : false);
        $tmp->course = (array_key_exists($c->id,$mapCou) ? $mapCou[$c->id] : "No course.");
        $tmp->vip = (in_array($c->id, $mapVIP) ? true : false);
        array_push($tmpCus, $tmp);
      }

      return [
          'success' => true,
          'data' => $tmpCus
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
      $used = $request->used;
      return $used;
      // $typeClass = new \App\TypeClass;
      // $typeClass->name = trim($request->name);
      // $typeClass->price = trim($request->price);
      // $typeClass->description = trim($request->description);
      // if (!empty($typeClass->name) && !empty($typeClass->price) && !empty($typeClass->description) && $typeClass->save()){
      //     return [
      //         'success' => true,
      //         'data' => "typeClass '{$typeClass->name}' was saved with id: {$typeClass->id}",
      //         'id' => $typeClass->id
      //     ];
      // } else {
      //     return [
      //         'success' => false,
      //         'data' => "Some error occurred"
      //     ];
      // }
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
