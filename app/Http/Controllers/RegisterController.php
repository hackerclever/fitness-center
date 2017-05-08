<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
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

  // public function create()
  // {
  //     return view('customers.create');
  // }


  public function showlstCustomer()
  {
      $client = new \GuzzleHttp\Client();
      $call = "customers";
      $response = $client->request('GET', "{$this->api}{$call}", [
          'form_params' => []
      ]);

      $resBody = $response->getBody();
      $res = json_decode($resBody);

      // Todo: request album from /api/singers/$id/albums

      return view('registers.create', [
          'success' => $res->success,
          'data' => !is_null($res)?$res->data: null
      ]);
  }
}
