<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypeClassController extends Controller
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
    public function index()
    {
      $client = new \GuzzleHttp\Client();
      $call = "typeclass";
      $response = $client->request('GET', "{$this->api}{$call}", [
          'form_params' => []
      ]);
      $resBody = $response->getBody();
      $res = json_decode($resBody);
        return view('typeClass.index',[
            'statusCode' => $response->getStatusCode(),
            'responseHeader' => $response->getHeader('content-type')[0],
            'success' => $res->success,
            'data' => $res->data,
            'resBody' => $response->getBody()
        ]);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('typeClass/create');
    }

}
