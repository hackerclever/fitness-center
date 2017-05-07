<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomersController extends Controller
{
  public function index()
  {
      $customers = \App\Customer::all();
      return [
          'success' => true,
          'data' => $customers
      ];
  }

  public funtion createCustomer()
  {

  }

  public function a($value='')
  {
    # code...
  }
}
