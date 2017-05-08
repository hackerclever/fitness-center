@extends('layouts.master')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1 class="text-center">Fitness Center</h1>
        </div>
    </div>
<div class="section">
  <div class="section-inner">
    <h2>HIGHLIGHTS</h2>
    <p>Looking for a fitness center in Thailand? You've come to the right place as our centers are equipped with advanced facilities that cater to all your needs and more. Join our fitness workout center in Singapore today and experience workouts like never before. The journey to a new, healthier you awaits.</p>
    <p><strong>Reasons To Join Fitness First</strong></p>
    <p>Make every movement count. With just the right amount of training and motivation, we can help you reach your fitness goals. Fully furnished gyms and specially crafted exercise routines such as our Dynamic Movement Training will provide a constant challenge to better yourself.  </p>
  </div>

</div>
    <div class="row">
      <ul>
        <li><a href="{{ url('/promotion/show') }}">Promotion</a></li>
      </ul>
    </div>
@endsection
