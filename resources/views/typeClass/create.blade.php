@extends('layouts.master')

@section('content')
<div class="container-fluid" id = 'vue-add-class'>
    <h1>Create Class</h1>
    <form class="select-promotion">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Class Name :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" v-model='name'>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Description :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" v-model='description'>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Price :</label>
            <div class="col-sm-10 input-group">
                <input type="text" class="form-control" aria-describedby="basic-addon2" v-model='price'>
                <span class="input-group-addon" id="basic-addon2">Baht</span>
            </div>
        </div>
        <button type="button" class="btn btn-primary" v-on:click='addClass'>Submit</button>
    </form>
</div>
@endsection

@section('script')
<script>
var vm = new Vue({
    el: '#vue-add-class',
    data : {
        // 'name' : 'Database',
        name: '',
        description: '',
        price: 0
    },
    methods : {
        addClass : function(){
            if(isNaN(this.price)){
                alert('Please input is number');
            }else{
                axios.post('http://fitness-center.dev/api/typeclass', {
                    name: this.name, description:this.description, price:this.price
                }).then(function (response) {
                    alert('Success');
                    console.log(response.data.data);
                    alert(response.data.data);
                    vm.name = '';
                    vm.description = 0;
                    vm.price = '';
                }).catch(function (error) {
                    alert('Error (see console log)');
                    console.log(error);
                });
            }
            this.name = '';
            this.description = '';
            this.price = 0;
        }
    }
});
</script>
@endsection
