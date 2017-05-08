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
                      ->where('customer_id', '=', $customerID)
                      ->where('startTime', '<', $dt->addHours(1))
                      ->where('endTime', '>', $dt)
                      ->count();
        $booking = new \App\Booking;
        $booking->customer_id = $customerID;
        $booking->user_id = $customerID;
        $booking->startTime = $year."-".$month."-".$day." ".$hours.":".$minute.":00";
        $booking->endTime = $year."-".$month."-".$day." ".($hours+1).":".$minute.":00";
        if (!empty($booking->customer_id ) && !empty($booking->user_id) && !empty($booking->startTime) && !empty($booking->endTime) && $booking->save()){
            return [
                'success' => true,
                'data' => $booking
            ];
        } else {
            return [
                'success' => false,
                'data' => "Some error occurred"
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
