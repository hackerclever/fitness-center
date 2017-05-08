@extends('layouts.master')

@section('content')
<h1 class="title">Customers Information</h1>

    <div class="container" id="vue-app-customers">
      <article class="message ">
          <div class="message-body" >

        <table class="table">
            <thead>
                <tr class="bg-info">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Tel.</th>
                    <th>Normal</th>
                    <th>Course</th>
                    <th>Vip</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="d in data">
                    <td>@{{ d.id }}</td>
                    <td>@{{ d.name }}</td>
                    <td>@{{ d.tel }}</td>
                    <td>@{{ d.normal }}</td>
                    <td>@{{ d.course }}</td>
                    <td>@{{ d.vip }}</td>
                </tr>
            </tbody>
        </table>
      </div>
    </article>
    </div>

@endsection

@section('script')

<script>
var data = <?php echo $resBody; ?>;
var vm = new Vue({
    el: '#vue-app-customers',
    data: data,

  // computed: {
  //   type: function(){
  //     var type="";
  //     console.log(this.data);
  //     for (var i = 0; i < this.data.length; i++){
  //       if(this.data[i].normal == true){
  //         type = "Normol";
  //       }else if(this.data[i].course != "No course"){
  //         type = this.data[i].course;
  //       }else if(this.data[i].vip == true){
  //         type = "VIP";
  //       }else{
  //         type = "หมดอายุการใช้งาน";
  //       }
  //       return type;
  //     }
  //
  //   // typeC: function(){
  //   //   return this.data.data[1].id;
    // }
  // }

  // }

  });
</script>
@endsection
