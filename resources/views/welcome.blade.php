@extends('layouts.master')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1 class="text-center">Fitness</h1>
        </div>
    </div>

    <div class="row">
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img src="https://unsplash.it/200?image=0" alt="Sample Image">
        </a>
        <br>
        <a href="{{ url('/contactUs/index') }}">contact</a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img src="https://unsplash.it/200?image=1" alt="Sample Image">
        </a>
        <br>
        <a href="{{ url('/promotion/show') }}">Promotion</a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img src="https://unsplash.it/200?image=2" alt="Sample Image">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img src="https://unsplash.it/200?image=3" alt="Sample Image">
        </a>
      </div>
    </div>
@endsection
