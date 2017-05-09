@extends('layouts.master')

@section('content')
<div class="container-fluid" id = 'vue-add-voucher'>
    <h1>Redeem Voucher Code</h1>
    <form class="select-voucher">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Key Voucher :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" v-model='name'>
            </div>
        </div>
        <button type="button" class="btn btn-primary" v-on:click="submit()">Submit</button>
    </form>
</div>
@endsection

@section('script')
<script>
var data = <?php echo $resBody; ?>;
var vm = new Vue({
    el: '#vue-add-voucher',
    data : {data,
      name: ''},

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
