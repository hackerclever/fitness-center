@extends('layouts.master')

@section('content')
<!--
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<div class="container" id="vue-app-test">

      {{ csrf_field() }}
      <button type="button" v-on:click = 'check()' class="btn btn-info btn-lg"  id="used" value="used">เคยเป็นสมาชิก</button>
      <button type="button" v-on:click = 'noUsedcheck()' class="btn btn-info btn-lg"  value="noused" name="noused">ไม่เคยเป็นสมาชิก</button>
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" >เทรนเนอร์</button>
  <div class="aa" v-if="used == 'ok'">

  </div>

  <div class="aa" v-if = "used">

    <div class="row" id = 'usedCus'  >
     <div class="col-md-8 col-md-offset-2" >
     <form   id="addForm"  method="post"  >
      <div class="form-group">
        <strong>Name or ID customer.</strong>
        <input list="browser" class="form-control" name="browser" v-model='customerID'>
        <datalist id = "browser">
          @foreach ($dataCustomers as $d)
          <option value= "{{$d->id}}"> {{$d->name}} </option>
          @endforeach
        </datalist>
        </div>
       <br></br>
       <div class="form-group">
         <strong>Type</strong>
       <select id ="selects" class="form-control" v-model="type">
           <option value="null">--กรุณาเลือกประเภทลูกค้า--</option>
           <option value="Normal">Normal</option>
           <option value="Course">Course</option>
           <option value="VIP">VIP</option>
       </select>
       </div>
       <div id = 'normalSelect'  v-if= "type=='Normal'">
         <br>
         <select name ="lstmonth" id ="lstmonth" v-model="month"  class="form-control">
           <option value="1">1 เดือน</option>
           <option value="2">4 เดือน</option>
           <option value="3">12 เดือน</option>

         </select>
       </div>
       <div id = 'courseSelect'  v-if ="type=='Course'">
         <br>
         <select name = "lstcourse" id ="lstcourse" v-model="courseID"  class="form-control">

           @foreach ($dataCourses as $d)
           <option value= "{{$d->id}}"> {{$d->name}} </option>
           @endforeach

         </select>
       </div>
       <div id = 'vipSelect' v-model="formData.browser" v-if = "type=='VIP'">
         <br>
         <select id ="lstTrainner" name="lstTrainner"  class="form-control">
           <option value="yoka">Steve Job</option>
           <option value="combo-Step">Bob</option>

         </select>
       </div>
       <button v-on:click="submit()" class="btn btn-default" type="button">บันทึกข้อมูล</button>

       </form>

      </div>
    </div>
  </div>

  <div class="aa"  v-if = "!used">
<br></br>
    <div class="row" id = 'nousedCus' >
      <div class="col-md-8 col-md-offset-2">

                  <form  class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                      {{ csrf_field() }}

                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          <label for="name" class="col-md-4 control-label">Name</label>

                          <div class="col-md-6">
                              <input id="name" type="text" v-model="name" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                              @if ($errors->has('name'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('name') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
                          <label for="name" class="col-md-4 control-label">Tel</label>

                          <div class="col-md-6">
                              <input id="tel" type="tel" v-model="tel" class="form-control" name="tel" value="{{ old('tel') }}" required autofocus>

                              @if ($errors->has('tel'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('tel') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>



                      <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                        <label for="type" class="col-md-4 control-label">ประเภทลูกค้า</label>
                      <select name ="select1" v-model="type" id ="select1" class="form-control">
                        <label  class="col-md-4 control-label">ประเภทลูกค้า</label>
                          <option value="null">--กรุณาเลือกประเภทลูกค้า--</option>
                          <option value="Normal">Normal</option>
                          <option value="Course">Course</option>
                          <option value="VIP">VIP</option>
                      </select>
                    </div>
                      <div name ='normalSelect1' id = 'normalSelect1' style="display:none">
                        <br>
                        <select id ="lstmonth1" v-model="month"  class="form-control">
                          <option value="1">1 เดือน</option>
                          <option value="2">4 เดือน</option>
                          <option value="3">12 เดือน</option>

                        </select>
                      </div>
                      <div name = 'courseSelect1' id = 'courseSelect1' style="display:none">
                        <br>
                        <select id ="lstcourse1" v-model="courseID"  class="form-control">

                          <option value="yoka">Yoka</option>
                          <option value="combo-Step">Combo-Step</option>

                        </select>
                      </div>
                      <div name = 'vipSelect1' id = 'vipSelect1' style="display:none">
                        <br>
                        <select id ="lstTrainner1" v-model="time"  class="form-control">

                          <option value="10">10 ครั้ง</option>
                          <option value="20">20 ครั้ง</option>
                          <option value="40">40 ครั้ง</option>


                        </select>
                      </div>
                      <button v-on:click="submit()" class="btn btn-default" type="button">บันทึกข้อมูล</button>
                  </form>

      </div>
  </div>
  </div>

<!--
    {{ csrf_field() }}
    <button type="button" v-on:click = 'check()' class="btn btn-info btn-lg"  id="used" value="used">เคยเป็นสมาชิก</button>
    <button type="button" v-on:click = 'noUsedcheck()' class="btn btn-info btn-lg"  value="noused" name="noused">ไม่เคยเป็นสมาชิก</button>
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" >เทรนเนอร์</button> -->

</div>

<script src="/js/app.js" charset="utf-8"></script>

<script>

var vm1 = new Vue({
  el: '#vue-app-test',
  data : {
    used:false,
    name:"",
    tel:"",
    customerID:'',
    type:"",
    month:0,
    courseID:0,
    time:0
  },
  methods:{
    check:function(){
      this.used = true;
    },
    noUsedcheck:function(){
      this.used = false;
    },

    submit: function () {
      if(this.used){
        if(this.type=='Normal'){
          this.submitUsedNormal();
        }else if(this.type=='Course'){
          this.submitUsedCourse();
        }else if(this.type=='VIP'){
          this.submitUsedVIP();
        }
      }else{
        if(this.type=='Normal'){
          this.submitNoUsedNormal();
        }else if(this.type=='Course'){
          this.submitNoUsedCourse();
        }else if(this.type=='VIP'){
          this.submitNoUsedVIP();
        }
      }
    },
    submitUsedNormal: function () {
      var customerID =this.customersID;
      var month = this.month;
        axios.post('http://fitness-center.dev/api/customers', {
            used:true,customerID:customerID,type:"Normal",month:month
        }).then(function (response) {
            console.log(response.data.data);
            vm1.name = '';
        }).catch(function (error) {
            alert('Error (see console log)');
            console.log(error);
        });
    },
    submitUsedCourse: function () {
      var customerID =this.customerID;
      var couseID = this.month;
        axios.post('http://fitness-center.dev/api/customers', {
            used:true,customerID:customerID,type:"Course",couseID:couseID
        }).then(function (response) {
            console.log(response.data.data);
            vm1.name = '';
        }).catch(function (error) {
            alert('Error (see console log)');
            console.log(error);
        });
    },
    submitUsedVIP: function () {
      var customerID =this.customerID;
      var time = this.time;
        axios.post('http://fitness-center.dev/api/customers', {
            used:true,customerID:customerID,type:"VIP",time:time
        }).then(function (response) {
            console.log(response.data.data);
            vm1.name = '';
        }).catch(function (error) {
            alert('Error (see console log)');
            console.log(error);
        });
    },
    submitNoUsedNormal: function () {
      var name = this.name;
      var tel = this.tel;
      var month = this.month;
        axios.post('http://fitness-center.dev/api/customers', {
            used:false,name:name,tel:tet,type:"Normal",month:month
        }).then(function (response) {
            console.log(response.data.data);
            vm1.name = '';
        }).catch(function (error) {
            alert('Error (see console log)');
            console.log(error);
        });
    },
    submitNoUsedCourse: function () {
      var name = this.name;
      var tel = this.tel;
      var courseID = this.courseID;
        axios.post('http://fitness-center.dev/api/customers', {
            used:false,name:name,tel:tel,type:"Course",couseID:courseID
        }).then(function (response) {
            console.log(response.data.data);
            vm1.name = '';
        }).catch(function (error) {
            alert('Error (see console log)');
            console.log(error);
        });
    },
    submitNoUsedVIP: function () {
      var name = this.name;
      var tel = this.tel;
      var time = this.time;
        axios.post('http://fitness-center.dev/api/customers', {
            used:false,name:name,tel:tel,type:"VIP",time:time
        }).then(function (response) {
            console.log(response.data.data);
            vm1.name = '';
        }).catch(function (error) {
            alert('Error (see console log)');
            console.log(error);
        });
    }


}

  //   submitForm :function(){
  //       var form = document.querySelector('#addForm');
  //       var formdata = new FormData(form);
  //       console.log(formdata);
  //       jQuery.ajax({
  //      url: '/api/customers',
  //      data: formdata,
  //      cache: false,
  //      contentType: false,
  //      processData: false,
  //      type: 'POST',
  //      success: function(data){
   //
  //        alert(data.data);
  //      }
  //    });
  //  }
    // submitForm:function(){
    //   // var that = this;
    //   var form = document.querySelector('#addForm');
    //            var formdata = new FormData(form);
    //         jQuery.ajax({
    //        url: '/api/customers/',
    //        data: this.formData,
    //        cache: false,
    //        contentType: false,
    //        processData: false,
    //        type: 'POST',
    //        success: function(data){
    //          //
    //          console.log(this.formData.isUsed);
    //          // alert(data.isUsed);
    //     }
    //   });
    // }
    //
    //
    // }


});

</script>


@endsection
