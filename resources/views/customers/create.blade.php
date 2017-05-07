@extends('layouts.master')

@section('content')
<div class="select-form" id = 'vue-add-trainer'>

    <form class='select-trainer' align = 'center'>
      <h1>Booking Trainer</h1>
      <div class="field">
        <p class="control">
          <span class="select">
            <select>
              <option value = '' >Select Trainer</option>
              <option value="trainer1">Name trainer from database</option>
            </select>
          </span>
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

      <div class="field">
        <p class="control">
          <span class="select">
            <select>
              <option value = '' >End Time</option>
              <option value="endTime1">End time from db</option>
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
var vm = new Vue({
    el: '#vue-add-trainer',
    data: {
      // 'name' : 'Database',
      'nameTrainer': ''
    },

    methods:
    {
      addTrainer : function(){
        
      }
    }
});
</script>
@endsection
