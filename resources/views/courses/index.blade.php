@extends('layouts.master') @section('content')
<style>
  .head-text-course {
    background-color: black;
    color: white;
    height: 145px;

    text-align: center;
  }

  .page-text-course {
    background-color: yellow;
    color: blue;
  }
  .card-title{
    margin-top: 30px;
  }
  .box-Mon{
      background-color: #ffbf00 ;
  }

  .box-Mon:hover {
    background-color: yellow;
  }
  .box-Sun{
      background-color: 	#df2020 ;
  }
  .box-Sun:hover{
      background-color: 	#FF6347 ;
  }

  .box-Tue{
    background-color:#ffcccc ;
  }
  .box-Tue:hover{
    background-color:	#ffb3b3	 ;
  }
  .box-Wed{
      background-color: #00fa60 ;
  }
  .box-Wed:hover{
      background-color:		#05c82c;
  }

  .box-Thu{
      background-color:#ff6b2e ;
  }
  .box-Thu:hover{
      background-color: 	#FF4500 ;
  }

  .box-Fri{
      background-color:	#40E0D0 ;
  }
  .box-Fri:hover{
      background-color:	  #00c4b9 ;
  }

  .box-Sat{
      background-color: #EE82EE;
  }
</style>
<div class="container" id='vue-app-courses'>

  <h1>Course Table</h1> @foreach(array('Sun','Mon','Tue','Wed','Thu','Fri','Sat') as $ds)
  <div class="row">
    <div class="col-sm-3">
      <div class="card">
        <div class="card-block head-text-course">
        <!-- @if($ds=='Sun')
        <div class="card-block head-text-course" style="background-color: #ffbf00;">

          @elseif($ds=='Mon')
          <div class="card-block head-text-course" style="background-color: yellow;">
            @elseif($ds=='Tue')
            <div class="card-block head-text-course" style="background-color: #ff00ff;">
              @elseif($ds=='Wed')
              <div class="card-block head-text-course" style="background-color: green;">
                @elseif($ds=='Thu')
                <div class="card-block head-text-course" style="background-color: #ff4000;">
                  @elseif($ds=='Fri')
                  <div class="card-block head-text-course" style="background-color: #00bfff;">
                    @elseif($ds=='Sat')
                    <div class="card-block head-text-course" style="background-color: #8000ff;">
                      @endif -->
                      <h3 class="card-title">{{$ds}}</h3>
                    </div>
                  </div>
                </div>
                @foreach($data as $d) @if($d->day == $ds)
                <div class="col-sm-3">
                  <div class="card box-{{$ds}}">
                    <div class="card-block">
                      <p class="card-text">Course name : {{$d->name}}</p>
                      <p class="card-text">Start time : {{floor($d->startTime/60)}}:{{($d->startTime%60)}}</p>
                      <p class="card-text">End time : {{floor($d->endTime/60)}}:{{($d->endTime%60)}}</p>
                    </div>
                  </div>
                </div>
                @endif @endforeach
              </div>
              @endforeach
            </div>
            @endsection @section('script')
            <script>
              var data = <?php echo $resBody; ?>;
              var vm = new Vue({
                el: '#vue-app-courses',
                data: data
              });
            </script>
            @endsection
