<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $customers = \App\Customer::all();
      $vipCus = DB::table('v_i_p_customers')
                    ->where('count', '>', 0)
                    ->get();
      $mapVIP = array();
      foreach ($vipCus as $n) {
        array_push($mapVIP,$n->customer_id);
      }
      $tmpCus = array();
      foreach ($customers as $c) {
        $tmp = new \stdClass();
        $tmp->id = $c->id;
        $tmp->name = $c->name;
        $tmp->tel = $c->tel;
        if(in_array($c->id, $mapVIP)){
          array_push($tmpCus, $tmp);
        }
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
        //trainerID, userID, startTime
        $trainerID = $request->trainerID;
        $customerID = $request->customerID;
        $startTime = $request->startTime;
        $date = explode("-",$startTime);
        $year = intval($date[0]);
        $month = intval($date[1]);
        $day = intval($date[2]);
        $hours = intval($date[3]);
        $minute = intval($date[4]);
        $dt = Carbon::create($year, $month, $day, $hours, $minute,0,0);
        $booked = DB::table('bookings')
                      ->where('user_id', '=', $trainerID)
                      ->where('startTime', '<=', $dt)//, '<', 'endTime')
                      ->where('endTime', '>', $dt)
                      // ->where('startTime', '<', $dt->addHours(1), '<', 'endTime')
                      ->count();
        $booking = new \App\Booking;
        $booking->customer_id = $customerID;
        $booking->user_id = $customerID;
        $booking->startTime = $year."-".$month."-".$day." ".$hours.":".$minute.":00";
        $booking->endTime = $year."-".$month."-".$day." ".($hours+1).":".$minute.":00";
        if (!empty($booking->customer_id ) && !empty($booking->user_id) && !empty($booking->startTime) && !empty($booking->endTime) && $booked==0 && $booking->save()){
            return [
                'success' => true,
                'data' => $booking,
                'count' => $booked,
                'date' => $dt
            ];
        } else {
            return [
                'success' => false,
                'data' => "Some error occurred",
                'count' => $booked,
                'date' => $dt
            ];
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
