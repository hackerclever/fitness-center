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
            <label class="col-sm-2 col-form-label">Discount Price :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" v-model='price'>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">End time :</label>
            <div class="col-10">
                <input class="form-control" type="date" v-model='endTime'>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Amount :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" v-model='amount'>
            </div>
        </div>
        <button type="button" class="btn btn-primary" v-on:click="submit()">Submit</button>
        <div class="form-group row">
            @for($i = 0; $i < {{amount}}; $i++)
              <label class="col-sm-2 col-form-label">Key :</label>
            @endforeach
        </div>
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
        price: 0,
        endTime: '',
        amount: 0
    },
    methods : {
        submit: function () {
            if(isNaN(this.price) && isNan(this.amount)){
                alert('Please input is number');
            }else{
                if(this.price>0 && this.amount>0){
                    alert('Add voucher is completed');
                    axios.post('http://fitness-center.dev/api/vouchers', {
                        name: this.name, price:this.price,endTime:this.endTime, number:this.amount
                    }).then(function (response) {
                        console.log(response.data.data);
                        alert(response.data.data);
                        vm.name = '';
                        vm.price = 0;
                        vm.endTime = '';
                    }).catch(function (error) {
                        alert('Error (see console log)');
                        console.log(error);
                        showKey++;
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
