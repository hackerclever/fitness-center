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
            <label class="col-sm-2 col-form-label">Start time :</label>
            <div class="col-sm-10 input-group">
                <input type="text" class="form-control" aria-describedby="basic-addon2" v-model='startTime'>
                <span class="input-group-addon" id="basic-addon2">Hours</span>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">End time :</label>
            <div class="col-sm-10 input-group">
                <input type="text" class="form-control" aria-describedby="basic-addon2" v-model='endTime'>
                <span class="input-group-addon" id="basic-addon2">Hours</span>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" v-on:click='addPromotion'>Submit</button>
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
        startTime: 0,
        endTime: 0
    },
    methods : {
        addPromotion : function(){
            if(isNaN(this.percent) && isNan(this.startTime) && isNan(this.endTime)){
                alert('Please input is number');
            }else{
                if(this.percent>0 && this.startTime>0 && this.endTime>0){
                    alert('Please input is more than 0');
                }
                alert('Add promotion is completed');
            }
            this.name = '';
            this.percent = 0;
            this.startTime = 0;
            this.endTime = 0;
        }
    }
});
</script>
@endsection
