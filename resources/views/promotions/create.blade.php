@extends('layouts.master')

@section('content')
<div class="container-fluid" id = 'vue-add-promotion'>
    <h1>Create Promotion</h1>
    <form class="select-promotion">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Promotion Name :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" v-model='name'>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Discount percentage :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" v-model='percent'>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">End time :</label>
            <div class="col-sm-10">
                <input class="form-control" type="date" v-model='endTime'>
            </div>
        </div>
        <button type="button" class="btn btn-primary" v-on:click='addPromotion'>Submit</button>
    </form>
</div>
@endsection

@section('script')
<script>
var vm = new Vue({
    el: '#vue-add-promotion',
    data : {
        // 'name' : 'Database',
        name: '',
        percent: 0,
        endTime: 0
    },
    methods : {
        addPromotion : function(){
            if(isNaN(this.percent)){
                alert('Please input is number');
            }else{
                if(this.percent<0){
                    alert('Please input is more than 0');
                }else{
                    axios.post('http://fitness-center.dev/api/promotions', {
                        name: this.name, percent:this.percent, endTime:this.endTime
                    }).then(function (response) {
                        console.log(response.data.data);
                        alert(response.data.data);
                        vm.name = '';
                        vm.percent = 0;
                        vm.endTime = '';
                    }).catch(function (error) {
                        alert('Error (see console log)');
                        console.log(error);
                    });
                    alert('Add promotion is completed');
                }
            }
            this.name = '';
            this.percent = 0;
            this.endTime = '';
        }
    }
});
</script>
@endsection
