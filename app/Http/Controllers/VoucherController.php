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
    public function update($id){

        $client = new \GuzzleHttp\Client();
        $call = "vouchers";
        $response = $client->request('PUT', "{$this->api}{$call}", [
            'form_params' => []
        ]);
        $resBody = $response->getBody();
        $res = json_decode($resBody);
          return view('vouchers.index',[
              'statusCode' => $response->getStatusCode(),
              'responseHeader' => $response->getHeader('content-type')[0],
              'success' => $res->success,
              'data' => $res->data,
              'resBody' => $response->getBody()
          ]);
    }

}
