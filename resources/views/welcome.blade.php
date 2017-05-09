@extends('layouts.master')

@section('content')
    <!-- <div class="jumbotron" style="background-color: blue";>
        <div class="container">
            <h1 class="text-center" style="color:white;">Fitness Center</h1>
        </div>
    </div> -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top:0;">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img class="d-block img-fluid" src="/images/fitnessImg.jpg" alt="First slide" style="width:100%;height:400px;">
      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid" src="/images/core-flow-yoga2.jpg" alt="Second slide" style="width:100%;height:400px;">
      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid" src="/images/cardio-22.jpg" alt="Third slide" style="width:100%;height:400px;">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<!-- <div class="section">
    <div class="section-inner">
      <h2>HIGHLIGHTS</h2>
      <p>Looking for a fitness center in Thailand? You've come to the right place as our centers are equipped with advanced facilities that cater to all your needs and more. Join our fitness workout center in Singapore today and experience workouts like never before. The journey to a new, healthier you awaits.</p>
      <br>
      <p><strong>Reasons To Join Fitness Center</strong></p>
      <p>Make every movement count. With just the right amount of training and motivation, we can help you reach your fitness goals. Fully furnished gyms and specially crafted exercise routines such as our Dynamic Movement Training will provide a constant challenge to better yourself.  </p>
      <br>
    </div>

</div>
<div class="row">
  <h3>DYNAMIC MOVEMENT TRAINING (DMT)</h3>
  <ul>
    <li>DMT uses the body’s natural movement patterns through three-dimensional exercises.</li>
    <li>Involve your whole body by challenging your cardiovascular, muscular and neural systems at the same time.</li>
    <li>Movements can just use your body weight or be loaded for greater benefit.</li>
    <li>The more dynamically you move, the better you’ll feel and perform.</li>
    <li>Combine dynamic strength, fitness and functional training to exercise three times more effectively.</li>
    <li>Improve muscular control, use more energy for accelerated weight loss and build performance in everyday life and sport.</li>
    <li>Dynamic movement training is important to help you maintain a healthy body and healthy mind.</li>
    <li>Whatever you want from a workout, make DMT part of your training programme for quicker and more effective results.</li>
  </ul>
  <div class="container">
    <img src="/images/bg1.jpg" style="position: relative;
  margin-left: 10px;">
  </div>
</div> -->
<div class="card-columns" style="padding-top:50px;">
  <div class="card">
    <img class="card-img-top img-fluid" src="/images/fitness.jpg" alt="Card image cap">
    <div class="card-block">
      <h4 class="card-title">Looking for a fitness center in Thailand?</h4>
      <p class="card-text">You've come to the right place as our centers are equipped with advanced facilities that cater to all your needs and more. Join our fitness workout center in Singapore today and experience workouts like never before. The journey to a new, healthier you awaits.</p>
    </div>
  </div>
  <div class="card p-3">
    <img class="card-img-top img-fluid" src="/images/dance.jpg" alt="Card image cap">
    <blockquote class="card-block card-blockquote">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer>
        <small class="text-muted">
          Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card">
    <img class="card-img-top img-fluid" src="/images/hardcore.jpg" alt="Card image cap">
    <div class="card-block">
      <h4 class="card-title">DMT Exercise</h4>
      <p class="card-text">DMT uses the body’s natural movement patterns through three-dimensional exercises.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card card-inverse card-primary p-3 text-center">
    <blockquote class="card-blockquote">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
      <footer>
        <small>
          Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card text-center">
    <img class="card-img-top img-fluid" src="/images/group.jpg" alt="Card image cap">
    <div class="card-block">
      <h4 class="card-title">Card title</h4>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img img-fluid" src="/images/freestyle.jpg" alt="Card image">
  </div>
  <div class="card p-3 text-right">
    <blockquote class="card-blockquote">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer>
        <small class="text-muted">
          Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card">
    <img class="card-img-top img-fluid" src="/images/yoga.jpg" alt="Card image cap">
    <div class="card-block">
      <h4 class="card-title">Card title</h4>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>

@endsection
