<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromotionController extends Controller
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
      $call = "promotions";
      $response = $client->request('GET', "{$this->api}{$call}", [
          'form_params' => []
      ]);
      $resBody = $response->getBody();
      $res = json_decode($resBody);
        return view('promotions.index',[
            'statusCode' => $response->getStatusCode(),
            'responseHeader' => $response->getHeader('content-type')[0],
            'success' => $res->success,
            'data' => $res->data,
            'resBody' => $response->getBody()
        ]);
    }

    public function create()
    {
        return view('promotions/create');
    }

}
