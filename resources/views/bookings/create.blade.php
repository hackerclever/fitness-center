@extends('layouts.master')

@section('content')
<div class="select-form" id = 'vue-add-trainer'>

      <form class='select-trainer' align = 'center'>
        <h1>Booking Trainer</h1>


        <div class="field">
          <p class="control">
        <input list="browsers" name="browser" v-model='idCustomer'>
        <datalist id = "browsers">
          @foreach ($data as $d)
          <option value= "{{$d->id}}"> {{$d->name}} </option>
          @endforeach
        </datalist>
      </p>
      </div>

  <div class="field">
    <p class="control">
  <input list="browser" name="browser" v-model='idTrainer'>
  <datalist id = "browser">
    @foreach ($data1 as $dd)
    <option value= "{{$dd->id}}"> {{$dd->name}} </option>
    @endforeach
  </datalist>
</p>
</div>

    <div class="field">
      <p class="control">
        <input list="browse" name="browser" v-model='startTime'>
          <datalist id = "browse">
              <option value = '' >Start Time</option>
              <option value="17-5-11-18-00">2017 เดือน 5 วันที่ 11 เวลา 18.00</option>
              <option value="17-5-15-13-00">2017 เดือน 5 วันที่ 15 เวลา 13.00</option>
              <option value="17-5-24-14-30">2017 เดือน 5 วันที่ 24 เวลา 14.30</option>
              <option value="17-6-8-8-30">2017 เดือน 6 วันที่ 8 เวลา 8.30</option>
              <option value="17-6-27-15-00">2017 เดือน 6 วันที่ 27 เวลา 15.00</option>
              <option value="17-7-15-10-00">2017 เดือน 7 วันที่ 13 เวลา 10.00</option>
              <option value="17-7-22-13-30">2017 เดือน 7 วันที่ 22 เวลา 13.30</option>
            </datalist>
        </p>
      </div>

      <button type="button" name="button" v-on:click = 'addTrainer()'>Add Trainer</button>
    </form>
</div>
@endsection

@section('script')
<script>
var data = <?php echo $customers; ?>;
var data1 = <?php echo $trainers; ?>;
var data2 = <?php echo $courses; ?>;
var vm = new Vue({
    el: '#vue-add-trainer',
    data: {
      idCustomer : '',
      idTrainer : '',
      trainer : '',
      startTime : '',
      data,
      data1,
      data2
    },

    methods:
    {
      addTrainer : function(){
        console.log(this.startTime);
        // axios.post('http://fitness-center.dev/api/bookings', {
        //         id_customer: this.idCustomer , id_trainer: this.isTrainer
        //     }).then(function (response) {
        //         console.log(response.data.data);
        //         alert(response.data.data);
        //         vm.name = '';
        //     }).catch(function (error) {
        //         alert('Error (see console log)');
        //         console.log(error);
        //     });
      }
    }
});
</script>
@endsection
