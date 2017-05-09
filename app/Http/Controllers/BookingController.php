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
      $call = "booking";
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

        return view('bookings.create',[
            'success' => $res->success,
            'data' => $res->data,
            'data1' => $res1->data,

            'customers' => $response->getBody(),
            'trainers' => $response1->getBody()

        ]);
    }

}
