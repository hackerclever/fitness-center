<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
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
      // $client = new \GuzzleHttp\Client();
      // $call = "customers";
      // $response = $client->request('GET', "{$this->api}{$call}", [
      //     'form_params' => []
      // ]);
      // $resBody = $response->getBody();
      // $res = json_decode($resBody);
        // return view('customers.index',[
        //     'statusCode' => $response->getStatusCode(),
        //     'responseHeader' => $response->getHeader('content-type')[0],
        //     'success' => $res->success,
        //     'data' => $res->data,
        //     'resBody' => $response->getBody()
        // ]);
        return view('customers.index');
    }

    public function create()
    {
        return view('customers.create');
    }

    public function show()
    {
      $client = new \GuzzleHttp\Client();
      $call = "customers";
      $response = $client->request('GET', "{$this->api}{$call}", [
          'form_params' => []
      ]);
      $resBody = $response->getBody();
      $res = json_decode($resBody);
        return view('customers.show' ,[
            'statusCode' => $response->getStatusCode(),
            'responseHeader' => $response->getHeader('content-type')[0],
            'success' => !is_null($res)? $res->success: false,
            'data' => !is_null($res)?$res->data: null,
            'resBody' => $response->getBody()
        ]);
      return view('customers.show');
    }
}
