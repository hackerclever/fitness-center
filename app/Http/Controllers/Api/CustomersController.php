<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $customers = \App\Customer::all();
      return [
          'success' => true,
          'data' => $customers
      ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $used = $request->used;
      return $used;
      // $typeClass = new \App\TypeClass;
      // $typeClass->name = trim($request->name);
      // $typeClass->price = trim($request->price);
      // $typeClass->description = trim($request->description);
      // if (!empty($typeClass->name) && !empty($typeClass->price) && !empty($typeClass->description) && $typeClass->save()){
      //     return [
      //         'success' => true,
      //         'data' => "typeClass '{$typeClass->name}' was saved with id: {$typeClass->id}",
      //         'id' => $typeClass->id
      //     ];
      // } else {
      //     return [
      //         'success' => false,
      //         'data' => "Some error occurred"
      //     ];
      // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
