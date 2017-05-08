@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <h1>All Classes</h1>

</div>
<div class="card-deck" id = 'vue-app-typeClass'>
  @foreach($data as $d)

      <div class="col-sm-4">
  <div class="card">
    <img class="card-img-top" src="/images/cls{{$d->id}}.jpg" style="width:338px;height:170px;">
    <div class="card-block">
      <h4 class="card-title">{{$d->name}}</h4>
      <p class="card-text">{{$d->description}}</p>
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
