@extends('layouts.master')

@section('content')
<style>
    .head-text-course{
        background-color: black;
        color: white;
        height: 145px;
        text-align: center;
    }
    .page-text-course{
        background-color: yellow;
        color: blue;
    }
</style>
<div class="container" id = 'vue-app-courses'>
    <h1>Course Table</h1>
    @foreach(array('Sun','Mon','Tue','Wed','Thu','Fri','Sat') as $ds)
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-block head-text-course">
                    <h3 class="card-title">{{$ds}}</h3>
                </div>
            </div>
        </div>
        @foreach($data as $d)
            @if($d->day == $ds)
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-block">
                            <p class="card-text">Course name : {{$d->name}}</p>
                            <p class="card-text">Start time : {{floor($d->startTime/60)}}:{{($d->startTime%60)}}</p>
                            <p class="card-text">End time : {{floor($d->endTime/60)}}:{{($d->endTime%60)}}</p>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
    @endforeach
</div>
@endsection
@section('script')
<script>
    var data = <?php echo $resBody; ?>;
    var vm = new Vue({
        el: '#vue-app-courses',
        data: data
    });
</script>
@endsection
