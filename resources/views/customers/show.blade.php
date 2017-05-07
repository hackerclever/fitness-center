@extends('layouts.master')

@section('content')
<h1 class="title">Customers Information</h1>
<div class="row">
<div class="col-md-6">
    <div class="panel panel-default" id="vue-app-customers">

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="d in data">
                    <td>@{{ d.id }}</td>
                    <td>@{{ d.name }}</td>
                    <td></td>
                    <td></td>
                    <!-- <td></td>
                    <td></td> -->
                </tr>
            </tbody>
        </table>
    </div>
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
