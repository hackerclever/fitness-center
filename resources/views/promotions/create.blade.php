@extends('layouts.master')

@section('content')
<div class="select-form" id = 'vue-add-promotion'>

    <form class='select-trainer' align = 'center'>
      <div class="panel-heading">
          <h1>Promotion</h1>
      </div>
      <div class="field">
        <p class="control">
          <span class="select">
            <p>Promotion Name :  <input type="text" v-model = 'name'></p>
            <p>Discount Percent :  <input type="text" v-model = 'percent'></p>
          </span>
        </p>
      </div>
      <div class="field">
        <p class="control">
          <span class="select">
            <p>End Time :  <select v-model = 'endTime'>
              <option value ="start">Select months</option>
              <option value="endTime1">1</option>
              <option value="endTime2">2</option>
              <option value="endTime3">3</option>
              <option value="endTime4">4</option>
              <option value="endTime4">5</option>
            </select></p>
          </span>
        </p>
      </div>
      <button type="button" name="button" v-on:click ="addPromotion()">Add Promotion</button>
    </form>
</div>
@endsection

@section('script')
<script>
var vm = new Vue({
    el: '#vue-add-promotion',
    data : {
        // 'name' : 'Database',
        name: '',
        percent: 0,
        endTime: 'start'
    },
    methods : {
        addPromotion : function(){
            if(isNaN(this.percent)){
                alert('Please input is number');
            }else{
                alert('Add promotion is completed');
            }
            this.name = '';
            this.percent = 0;
            this.endTime = 'start';
        }
    }
});
</script>
@endsection
