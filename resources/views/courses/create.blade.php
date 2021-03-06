@extends('layouts.master')

@section('content')
<h1>Create Course</h1>

<div class="container" id="vue-course">
  <div class="comtainer" v-if="showTable>0">
    <table  class="table table-striped table-inverse" >
      <thead>
        <tr>
          <th>  #  </th>
          <th>  TypeClass  </th>
          <th>  Trainer Name </th>
          <th>  Day  </th>
          <th>  StartTime  </th>
          <th>  EndTime  </th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(course, index) in courses">
          <td>@{{ index+1 }}</td>
          <td>@{{ course.typeClass }}</td>
          <td>@{{ course.trainerName }}</td>
          <td>@{{ course.day }}</td>
          <td>@{{ course.startTime }}</td>
          <td>@{{ course.endTime }}</td>
      </tr>
      </tbody>
    </table>
  </div>

  <div class="form-group row">
    <label for="typeClass" class="col-2 col-form-label">Type Class</label>
    <div class="col-10">
      <select class="form-control" v-model="typeClass" id="typeClassSelect" v-if="showTable==0">
        @foreach($data as $d)
          <option>{{$d->id." ".$d->name}}</option>
        @endforeach
      </select>
      <select class="form-control" v-model="typeClass" v-if="showTable>0" disabled>
      </select>
    </div>
  </div>
    <div class="form-group row">
      <label for="trainner-text-input" class="col-2 col-form-label">Trainner Name</label>
      <div class="col-10">
        <select class="form-control" v-model="formcourse.trainerName" id="trainerNameSelect">
          @foreach($data2 as $d)
            <option>{{$d->id." ".$d->name}}</option>
          @endforeach
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="day" class="col-2 col-form-label">Day</label>
      <div class="col-10">
        <select class="form-control" v-model="formcourse.day" id="daySelect">
          <option>Sun</option>
          <option>Mon</option>
          <option>Tue</option>
          <option>Wed</option>
          <option>Thuy</option>
          <option>Fri</option>
          <option>Sat</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="startTime" class="col-2 col-form-label">StartTime</label>
      <div class="col-10">
        <select class="form-control" v-model="formcourse.startTime" id="startTimeSelect">
          <option value="480">08.00</option>
          <option value="510">08.30</option>
          <option value="540">09.00</option>
          <option value="570">09.30</option>
          <option value="600">10.00</option>
          <option value="630">10.30</option>
          <option value="660">11.00</option>
          <option value="690">11.30</option>
          <option value="720">12.00</option>
          <option value="750">12.30</option>
          <option value="780">13.00</option>
          <option value="810">13.30</option>
          <option value="840">14.00</option>
          <option value="870">14.30</option>
          <option value="90">15.00</option>
          <option value="930">15.30</option>
          <option value="960">16.00</option>
          <option value="990">16.30</option>
          <option value="1020">17.00</option>
          <option value="1050">17.30</option>
          <option value="1080">18.00</option>
          <option value="1110">18.30</option>
          <option value="1140">19.00</option>
          <option value="1170">19.30</option>
          <option value="1200">20.00</option>
          <option value="1230">20.30</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="endTime" class="col-2 col-form-label">EndTime</label>
      <div class="col-10">
        <select class="form-control" v-model="formcourse.endTime" id="endTimeSelect">
          <option value="480">08.00</option>
          <option value="510">08.30</option>
          <option value="540">09.00</option>
          <option value="570">09.30</option>
          <option value="600">10.00</option>
          <option value="630">10.30</option>
          <option value="660">11.00</option>
          <option value="690">11.30</option>
          <option value="720">12.00</option>
          <option value="750">12.30</option>
          <option value="780">13.00</option>
          <option value="810">13.30</option>
          <option value="840">14.00</option>
          <option value="870">14.30</option>
          <option value="90">15.00</option>
          <option value="930">15.30</option>
          <option value="960">16.00</option>
          <option value="990">16.30</option>
          <option value="1020">17.00</option>
          <option value="1050">17.30</option>
          <option value="1080">18.00</option>
          <option value="1110">18.30</option>
          <option value="1140">19.00</option>
          <option value="1170">19.30</option>
          <option value="1200">20.00</option>
          <option value="1230">20.30</option>
        </select>
      </div>
    </div>

    <button type="button" class="btn btn-primary" v-on:click="submitCourseForm()">OK</button>
    <button type="button" class="btn btn-success">Summit</button>

</div>
@endsection

@section('script')
<script>
var data = <?php echo $resBody; ?>;
var data2 = <?php echo $resBody2; ?>;
var vm = new Vue({
    el: '#vue-course',
    data: {
        typeClass:'',
        courses:[],
        days:[],
        startTimes:[],
        endTimes:[],
        showTable:0,
        formcourse:{
          trainerName:'',
          day:'',
          startTime:'',
          endTime:''
        }
    },

    methods:
    {
      submitCourseForm:function(){
          if(this.typeClass.length>0
  					&& this.formcourse.trainerName.length>0
  					&& this.formcourse.day.length>0
  					&& this.formcourse.startTime.length>0
            && this.formcourse.endTime.length>0
            && this.formcourse.startTime<this.formcourse.endTime)
  				{
            // for(int i=0;i<this.courses.length;i++){
            //     if(this.formcourse.trainerName==this.courses.trainerName[i]
            //       && this.formcourse.typeClass==this.courses.typeClass[i]){
            //         if(this.formcourse.day==this.courses.day[i]){
            //           if(this.formcourse.startTime<this.courses.day[i])
            //         }
            //     }
            // }

                this.courses.push({
                  typeClass:this.typeClass,
                  trainerName:this.formcourse.trainerName,
                  day:this.formcourse.day,
                  startTime:this.formcourse.startTime,
                  endTime:this.formcourse.endTime
                })
                this.days.push({
                  day:this.formcourse.day
                })
                this.startTimes.push({
                  time:this.formcourse.startTime
                })
                this.endTimes.push({
                  time:this.formcourse.endTime
                })

                console.log(this.courses.length);
                if(this.courses.length>0){
                  this.clearFormCourse();
                  this.showTable++;

                }
          }
        

          else if (this.formcourse.startTime>this.formcourse.endTime){
            alert ("Please select time again");
          }
          else {
            alert ("Invalid Input Data");
          }

      },

      clearFormCourse:function(){
				this.formcourse.trainerName='';
				this.formcourse.day='';
				this.formcourse.startTime='';
        this.formcourse.endTime='';
			}

      // submitTotal: function () {
      //       axios.post('http://fitness-center.dev/api/courses', {
      //
      //           type_class_id: this.courses.typeClass
      //           trainer_id: this.courses.trainerName
      //       }).then(function (response) {
      //           console.log(response.data.data);
      //           alert(response.data.data);
      //           vm.name = '';
      //       }).catch(function (error) {
      //           alert('Error (see console log)');
      //           console.log(error);
      //       });
      //   }
    }

});
</script>
@endsection
