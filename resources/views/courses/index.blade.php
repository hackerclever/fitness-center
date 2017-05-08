@extends('layouts.master')

@section('content')
<style>
    .head-text-course{
        background-color: black;
        color: white;
    }
    .page-text-course{
        background-color: yellow;
        color: blue;
    }
    .box-course{
        width: 150px;
        height: 150px;
        margin: 10px;
        text-align: center;
        overflow: initial;
    }
</style>
<div class="container" id = 'vue-app-customers'>
    <h1>Course Table</h1>
    <div class="box-course head-text-course">
        <br><br><h3>Sunday</h3>
    </div>
    <div class="box-course page-text-course">
        <h2>ffffffffffffffffff</h2>
    </div>
</div>
@endsection
@section('script')
<script>
    var data = <?php echo $resBody; ?>;
    var vm = new Vue({
        el: '#vue-app-customers',
        data: data
    });
</script>
@endsection
