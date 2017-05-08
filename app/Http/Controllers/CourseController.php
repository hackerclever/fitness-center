<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
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
        $call = "courses";
        $response = $client->request('GET', "{$this->api}{$call}", [
            'form_params' => []
        ]);
        $resBody = $response->getBody();
        $res = json_decode($resBody);
        return view('courses.index' ,[
            'statusCode' => $response->getStatusCode(),
            'responseHeader' => $response->getHeader('content-type')[0],
            'success' => !is_null($res)? $res->success: false,
            'data' => !is_null($res)?$res->data: null,
            'resBody' => $response->getBody()
        ]);
    }

    public function create()
    {
      $client = new \GuzzleHttp\Client();
      $call = "typeclass";
      $response = $client->request('GET', "{$this->api}{$call}", [
          'form_params' => []
      ]);

      $client2 = new \GuzzleHttp\Client();
      $call2 = "trainers";
      $response2 = $client2->request('GET', "{$this->api}{$call2}", [
          'form_params' => []
      ]);

      $resBody = $response->getBody();
      $res = json_decode($resBody);

      $resBody2 = $response2->getBody();
      $res2 = json_decode($resBody2);
      return view('courses.create' ,[
          'success' => !is_null($res)? $res->success: false,
          'data' => !is_null($res)?$res->data: null,
          'resBody' => $response->getBody(),
          'data2' => !is_null($res2)?$res2->data: null,
          'resBody2' => $response2->getBody()
      ]);

    }

}
