@extends('layouts.master')

@section('content')
<div class="select-form" id = 'vue-add-trainer'>

      <form class='select-trainer' align = 'center'>
        <h1>Booking Trainer</h1>


<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Customer :</label>
  <div class="col-10">
    <input list="browsers" class="form-control" name="browser" v-model='idCustomer'>
    <datalist id = "browsers">
      @foreach ($data as $d)
        <option value= "{{$d->id}} {{$d->name}}"> {{$d->id}} </option>
      @endforeach
    </datalist>
  </div>
</div>

<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Trainer :</label>
  <div class="col-10">
    <input list="browser" class="form-control" name="browser" v-model='idTrainer'>
    <datalist id = "browser">
      @foreach ($data1 as $dd)
      <option value= "{{$dd->id}} {{$dd->name}}"> {{$dd->name}} </option>
      @endforeach
    </datalist>
  </div>
</div>


<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Start time : </label>
  <div class="col-10">
        <input class="form-control" type="datetime-local" v-model="startTime">
          <!-- <datalist id = "browse">
              <option value = '' >Start Time</option>
              <option value="2017-5-11-18-00">2017 เดือน 5 วันที่ 11 เวลา 18.00</option>
              <option value="2017-5-15-13-00">2017 เดือน 5 วันที่ 15 เวลา 13.00</option>
              <option value="2017-5-24-14-30">2017 เดือน 5 วันที่ 24 เวลา 14.30</option>
              <option value="2017-6-8-8-30">2017 เดือน 6 วันที่ 8 เวลา 8.30</option>
              <option value="2017-6-27-15-00">2017 เดือน 6 วันที่ 27 เวลา 15.00</option>
              <option value="2017-7-15-10-00">2017 เดือน 7 วันที่ 13 เวลา 10.00</option>
              <option value="2017-7-22-13-30">2017 เดือน 7 วันที่ 22 เวลา 13.30</option>
            </datalist> -->
          </div>
          </div>

      <button type="button" name="button" class="btn btn-primary" v-on:click = 'addTrainer'>Booking Trainer</button>
    </form>
</div>
@endsection

@section('script')
<script>
var data = <?php echo $customers; ?>;
var data1 = <?php echo $trainers; ?>;

var vm = new Vue({
    el: '#vue-add-trainer',
    data: {
      idCustomer : '',
      idTrainer : '',
      trainer : '',
      startTime : '',
      // endTime : '',
      data,
      data1
    },

    methods:
    {
      addTrainer : function(){
        var Customer = this.idCustomer.split(" ");
        var CustomerID = Customer[0];

        var Trainer = this.idCustomer.split(" ");
        var TrainerID = Trainer[0];

        var dateTime = this.startTime.replace("T","-");
        var dTime = dateTime.replace(":","-");
        console.log(dTime);
        axios.post('http://fitness-center.dev/api/booking', {
                customerID: CustomerID , trainerID: TrainerID , startTime : dTime
            }).then(function (response) {
                console.log(response.data.data);
                // alert(response.data.data);
                alert("Booking Trainer is Completed.");
                vm.idCustomer ='';
                vm.idTrainer ='';
                vm.startTime = '';
            }).catch(function (error) {
                alert('Error (see console log)');
                console.log(error);
            });
            // alert("Booking Trainer is Completed.");
            this.idCustomer = '';
            this.idTrainer = '';
            this.startTime = '';
      }
    }
});
</script>
@endsection
