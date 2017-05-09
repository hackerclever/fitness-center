@extends('layouts.master') @section('content')
<div class="container-fluid">
  <h1>Promotion</h1>

</div>
<div class="card-deck" id='vue-app-promotions'>
  @foreach($data as $d) @if($d->name=='40')
  <div class="col-sm-4">
    <div class="card">
      <img class="card-img-top" src="/images/discount{{$d->id}}.jpg" style="width:338px;height:170px;">
      <div class="card-block">
        <h5 class="card-title">Promotion : Merry X'mas for cadio course</h5>
        <p class="card-text"> Discount : {{$d->percent}}%</p>
      </div>
    </div>
  </div>
  @else
  <div class="col-sm-4">
    <div class="card">
      <img class="card-img-top" src="/images/discount{{$d->id}}.jpg" style="width:338px;height:170px;">
      <div class="card-block">
        <h4 class="card-title">Promotion name : {{$d->name}}</h4>
        <p class="card-text"> Percent : {{$d->percent}}</p>
      </div>
    </div>
  </div>
  @endif @endforeach
</div>
@endsection @section('script')
<script>
  var data = <?php echo $resBody; ?>;
  var vm = new Vue({
    el: '#vue-app-promotions',
    data: data
  });
</script>
@endsection
