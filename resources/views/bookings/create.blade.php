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
          <span class="select">
            <select>
              <option value = '' >Start Time</option>
              <option value="startTime1">Start time from db</option>
            </select>
          </span>
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
      endTime : '',
      data,
      data1,
      data2
    },

    methods:
    {
      addTrainer : function(){
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
