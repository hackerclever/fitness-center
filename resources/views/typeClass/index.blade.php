@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <h1>Type Class</h1>

</div>
<div class="card-deck" id = 'vue-app-typeClass'>
  @foreach($data as $d)

      <div class="col-sm-4">
  <div class="card">
    <img class="card-img-top" src="/images/discount{{$d->id}}.jpg" style="width:338px;height:170px;">
    <div class="card-block">
      <h4 class="card-title">TypeClass name : {{$d->name}}</h4>
      <p class="card-text"> Percent : {{$d->percent}}</p>
      <p class="card-text"> Percent : {{$d->percent}}</p>
    </div>
  </div>
</div>
  @endforeach
</div>
@endsection
@section('script')
<script>
    var data = <?php echo $resBody; ?>;
    var vm = new Vue({
        el: '#vue-app-typeClass',
        data: data
    });
</script>
@endsection
