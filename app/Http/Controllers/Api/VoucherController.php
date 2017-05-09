<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $vouchers = \App\Voucher::all();
      return [
          'success' => true,
          'data' => $vouchers
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
      $name = trim($request->name);
      $price = intval(trim($request->price));
      $endTime = trim($request->endTime);
      $number = intval(trim($request->number));
      $vouchers = array();
      if (!empty($name) && !empty($price) && !empty($endTime) && !empty($number)){
        for ($n = 0; $n < $number; $n++) {
          $voucher = new \App\Voucher;
          $voucher->name = $name;
          $voucher->price = $price;
          $voucher->endTime = $endTime;
          // $voucher->key = ($voucher->id);
          $voucher->save();
          $voucher->key = md5($voucher->id);
          $voucher->save();
          array_push($vouchers,$voucher);
        }
          return [
              'success' => true,
              'data' => $vouchers
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
