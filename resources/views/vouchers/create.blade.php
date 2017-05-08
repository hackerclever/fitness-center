@extends('layouts.master')

@section('content')
<div class="container-fluid" id = 'vue-add-voucher'>
    <h1>Create Voucher</h1>
    <form class="select-voucher">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Voucher Name :</label>
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
            <div class="col-10">
                <input class="form-control" type="date" v-model='endTime'>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Key :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" v-model='key'>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" v-on:click="submit()">Submit</button>
    </form>
</div>
@endsection

@section('script')
<script>
var vm = new Vue({
    el: '#vue-add-voucher',
    data : {
        // 'name' : 'Database',
        name: '',
        percent: 0,
        endTime: '',
        key: ''
    },
    methods : {
        submit: function () {
            if(isNaN(this.percent)){
                alert('Please input is number');
            }else{
                if(this.percent>0){
                    alert('Add voucher is completed');
                    axios.post('http://fitness-center.dev/api/vouchers', {
                        name: this.name, price:this.percent,endTime:this.endTime, number:this.key
                    }).then(function (response) {
                        console.log(response.data.data);
                        alert(response.data.data);
                        vm.name = '';
                        vm.percent = 0;
                        vm.endTime = '';
                        vm.key = '';
                    }).catch(function (error) {
                        alert('Error (see console log)');
                        console.log(error);
                    });
                }
                else{
                    alert('Please input is more than 0');
                }
            }
        }
    }
});
</script>
@endsection
