@extends('layouts.master')

@section('content')

<div class="container-fluid" id = 'vue-app-customers'>
  <h1>Search Customer</h1>
<div class="info">
  <form class="info-form">
    <!-- <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default"> -->
          <!-- <div class="panel-heading">Search Customer</div> -->

          <!-- <div class="panel-body"> -->
            <!-- <input type="text" name="customerName" v-model = 'nameC'> -->
            <div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Customer : </label>
  <div class="col-10">
            <input list="browsers" class="form-control"  name="browser" v-model='name'>
            <datalist id = "browsers">
              @foreach ($data as $d)
              <option value= "{{$d->name}}"> {{$d->id}} </option>
              @endforeach
            </datalist>
            <br><br>
            <button type="button" class="btn btn-primary" name="button" v-on:click = 'checkCustomer()'>check </button>
            <button type="button" class="btn btn-primary" name="button" v-on:click = 'clearCustomer()'>clear </button>
          <!-- </div> -->

  </form>
<!-- </div>
</div> --></div>
</div>
</div>

<div class="no-information" v-if = '!isFound'>
    <!-- <h1>There is no data of this customer in this system</h1> -->
</div>

<div class="information" v-if = 'isFound'>
  <br><br>
  <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
  <!-- <img src= '@{{img}}' width="150" height="150"> -->
  <h1>@{{nameGet}}</h1>
  <p>Type of customer : @{{normal}} , @{{course}} ,  @{{vip}}</p>
  <p>Tel. : @{{telGet}}</p>
</div>
</div>
</div>
</div>
</div>
@endsection

@section('script')
<script>
var data = <?php echo $resBody; ?>;
var vm = new Vue({
    el: '#vue-app-customers',
    data : {
      isFound : false,
      name:'',
      nameGet : '',
      telGet:'',
      normal : '',
      course: '',
      vip: '',
      data
    },


    methods:
    {
      checkCustomer : function(){
        var a = 0;
        for (var i = 0; i < this.data.data.length; i++) {
          if(this.data.data[i].name == this.name){
            this.nameGet = this.name;
            this.telGet = this.data.data[i].tel;
            this.normal = this.data.data[i].normal;
            if(this.normal == false){
              this.normal = '';
            }else{
              this.normal = 'Normal'
            }
            this.course = this.data.data[i].course;
            if(this.course == 'No course.'){
              this.course = '';
            }
            this.vip = this.data.data[i].vip;
            if(this.vip == false){
              this.vip = '';
            }else{
              this.vip = 'VIP';
            }
            this.isFound = true;
            // this.name = '';
          }else{
            a++;
          }
        }
        if(a == this.data.data.length){
          alert("No Information");
          this.name = '';
        }
      },
      clearCustomer: function(){
        this.name = '';
        this.isFound = false;
      }
    }
});
</script>
@endsection
