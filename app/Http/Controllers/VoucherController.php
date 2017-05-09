<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoucherController extends Controller
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
     public function index()
     {
       $client = new \GuzzleHttp\Client();
       $call = "vouchers";
       $response = $client->request('GET', "{$this->api}{$call}", [
           'form_params' => []
       ]);
       $resBody = $response->getBody();
       $res = json_decode($resBody);

       $client2 = new \GuzzleHttp\Client();
       $call2 = "customers";
       $response2 = $client2->request('GET', "{$this->api}{$call2}", [
           'form_params' => []
       ]);
       $resBody2 = $response2->getBody();
       $res2 = json_decode($resBody2);
         return view('vouchers.index',[
             'success' => $res->success,
             'data' => $res->data,
             'resBody' => $response->getBody(),
             'data2' => $res2->data,
             'resBody2' => $response2->getBody()
         ]);
     }

    public function create()
    {
        $client = new \GuzzleHttp\Client();
        $call = "vouchers";
        $response = $client->request('GET', "{$this->api}{$call}", [
            'form_params' => []
        ]);
        $resBody = $response->getBody();
        $res = json_decode($resBody);
          return view('vouchers.create',[
              'success' => $res->success,
              'data' => $res->data,
              'resBody' => $response->getBody()
          ]);
    }

}
