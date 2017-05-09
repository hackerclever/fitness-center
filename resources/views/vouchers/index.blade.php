@extends('layouts.master')

@section('content')
<div class="container-fluid" id = 'vue-add-voucher'>
      <form class="select-voucher">
    <h1>Redeem Voucher Code</h1>
    <div class="form-group row">
        <label for="example-text-input" class="col-2 col-form-label">Customer : </label>
        <div class="col-10">
            <input list="browsers" class="form-control"  name="browser" v-model='name'>
            <datalist id = "browsers">
                @foreach ($data2 as $d)
                    <option value= "{{$d->name}}"> {{$d->id}} </option>
                @endforeach
            </datalist>
        </div>
    </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Key Voucher :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" v-model='key'>
                </div>
            </div>
            <button type="button" class="btn btn-primary" v-on:click="submit()">Submit</button>
        </form>
    </div>
@endsection

@section('script')
<script>
var data = <?php echo $resBody; ?>;
var data2 = <?php echo $resBody2; ?>;
var vm = new Vue({
    el: '#vue-add-voucher',
    data : {data,data2,
      key: '',
    name:''
  },

      methods:{
        submit:function(){
          // console.log(this.data.data);
          var a = 0;
          for(var i = 0; i < this.data.data.length; i++){
            if(this.data.data[i].key == this.name){
              alert("Success");
            }else{
              a++;
            }
          }
          if(a ==  this.data.data.length){
            alert("No this voucher.");
          }
}
        }

});
</script>
@endsection
