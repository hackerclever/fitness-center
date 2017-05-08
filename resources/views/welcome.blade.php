@extends('layouts.master')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1 class="text-center">Fitness Center</h1>
        </div>
    </div>

    <div class="row">
      <ul>
        <li><a href="{{ url('/contactUs/index') }}">contact</a></li>
        <li><a href="{{ url('/promotion/show') }}">Promotion</a></li>
      </ul>
    </div>
@endsection
