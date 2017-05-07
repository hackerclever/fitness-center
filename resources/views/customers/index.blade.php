@extends('layouts.master')

@section('content')
<div class="container" id = 'vue-app-customers'>
<div class="info">
  <form class="info-form">
      <input type="text" name="customerName" v-model = 'nameC'>
      <button type="button" name="button" v-on:click = 'checkCustomer()'>check </button>
      <button type="button" name="button" v-on:click = 'clearCustomer()'>clear </button>
  </form>
</div>

<div class="no-information" v-if = '!isFound'>
    <!-- <h1>There is no data of this customer in this system</h1> -->
</div>

<div class="information" v-if = 'isFound'>
  <img src="images/ex.jpg" width="150" height="150">
  <h1>Name Cutomer in Database</h1>
  <p>ID Customer : </p>
  <p>name : </p>
  <p>Tel. : </p>
</div>
</div>
@endsection

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script>
var vm = new Vue({
    el: '#vue-app-customers',
    data : {
      'isFound' : false,
      'nameC' : ''
    },


    methods:
    {
      checkCustomer : function(){
        console.log(this.nameC);
        if(this.nameC == '123'){
          this.isFound = true;
        }else{
          alert("No Information");
        }
      },
      clearCustomer: function(){
        this.nameC = '';
        this.isFound = false;
      }
    }
});
</script>
@endsection
