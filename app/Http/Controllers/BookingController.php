<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    private $api = "http://fitness-center.dev/api/";
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
      $client = new \GuzzleHttp\Client();
      $call = "customers";
      $response = $client->request('GET', "{$this->api}{$call}", [

          'form_params' => []
      ]);
      $resBody = $response->getBody();
      $res = json_decode($resBody);

      $client1 = new \GuzzleHttp\Client();
      $call1 = "trainers";
      $response1 = $client1->request('GET', "{$this->api}{$call1}", [
          'form_params' => []
      ]);
      $resBody1 = $response1->getBody();
      $res1 = json_decode($resBody1);

      $client2 = new \GuzzleHttp\Client();
      $call2 = "courses";
      $response2 = $client2->request('GET', "{$this->api}{$call2}", [
          'form_params' => []
      ]);
      $resBody2 = $response1->getBody();
      $res2 = json_decode($resBody2);

        return view('bookings.create',[
            'success' => $res->success,
            'data' => $res->data,
            'data1' => $res1->data,
            'data2' => $res2->data,
            'customers' => $response->getBody(),
            'trainers' => $response1->getBody(),
            'courses' => $response2->getBody()
        ]);
    }

}
