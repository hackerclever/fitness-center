@extends('layouts.app')

@section('content')

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>



<div class="container">
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#used" id ="used">เคยเป็นสมาชิก</button>
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#noused" id ="noused">ไม่เคยเป็นสมาชิก</button>
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">เทรนเนอร์</button>
</div>

    <!-- Modal -->
    <div class="modal fade" id="noused" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>
          </div>
          <div class="modal-body">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                            <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Name</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>


                                <select id ="select1" class="form-control">
                                  <label  class="col-md-4 control-label">ประเภทลูกค้า</label>
                                    <option value="null">--กรุณาเลือกประเภทลูกค้า--</option>
                                    <option value="normal">Normal</option>
                                    <option value="course">Course</option>
                                    <option value="vip">VIP</option>
                                </select>

                                <div id = 'normalSelect1' style="display:none">
                                  <br>
                                  <select id ="lstmonth1"   class="form-control">
                                    <option value="1">1 เดือน</option>
                                    <option value="2">4 เดือน</option>
                                    <option value="3">12 เดือน</option>

                                  </select>
                                </div>
                                <div id = 'courseSelect1' style="display:none">
                                  <br>
                                  <select id ="lstcourse1"   class="form-control">
                                    <!-- <option value="null">--กรุณาเลือกจำนวนเดือน</option> -->
                                    <option value="yoka">Yoka</option>
                                    <option value="combo-Step">Combo-Step</option>

                                  </select>
                                </div>
                                <div id = 'vipSelect1' style="display:none">
                                  <br>
                                  <select id ="lstTrainner1"   class="form-control">
                                    <!-- <option value="null">--กรุณาเลือกจำนวนเดือน</option> -->
                                    <option value="yoka">Steve Job</option>
                                    <option value="combo-Step">Bob</option>

                                  </select>
                                </div>
                            </form>
                            <script>
                            $(document).ready(function(){
                                $('#select1').on('change', function() {
                                  var myOption = $('#select1').val()
                                    console.log(myOption);
                                  if ( myOption == 'normal')
                                  {
                                    $('#normalSelect1').show();

                                    $('#vipSelect1').hide();
                                    $('#courseSelect1').hide();
                                  }
                                  if ( myOption == 'course')
                                  {

                                    $('#normalSelect1').hide();
                                    $('#vipSelect1').hide();
                                    $('#courseSelect1').show();
                                    // business.show();
                                  }
                                  if ( myOption == 'vip')
                                  {
                                    $('#normalSelect1').hide();
                                    $('#courseSelect1').hide();
                                    $('#vipSelect1').show();
                                  }
                                  else
                                  {
                                  }
                                });
                            });
                            </script>
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" type ="submit">บันทึกข้อมูล</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

          </div>
        </div>

      </div>
    </div>



  <!-- <div class="modal fade" id="used" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <!-- <div class="modal-content" > -->


        <!-- <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">ลงทะเบียน</h4>
          </div> -->

          <!-- <div class="modal-body" > -->
            <!-- <p>Some text in the modal.</p> -->

            <div class="row">
                <div class="col-md-8 col-md-offset-2" >


                <form  method="get" >
                        <input list="browsers" name="browser">
                        <datalist id="browsers">

                            @foreach($data as $d)
                            <option value={{$d->name}}>{{$d->id}}</option>
                            @endforeach

                        </datalist>
                        <input type="submit">
                  <br></br>
                  <select id ="selects" class="form-control">
                      <option value="null">--กรุณาเลือกประเภทลูกค้า--</option>
                      <option value="normal">Normal</option>
                      <option value="course">Course</option>
                      <option value="vip">VIP</option>
                  </select>

                  <div id = 'normalSelect' style="display:none">
                    <br>
                    <select id ="lstmonth"   class="form-control">
                      <option value="1">1 เดือน</option>
                      <option value="2">4 เดือน</option>
                      <option value="3">12 เดือน</option>

                    </select>
                  </div>
                  <div id = 'courseSelect' style="display:none">
                    <br>
                    <select id ="lstcourse"   class="form-control">
                      <!-- <option value="null">--กรุณาเลือกจำนวนเดือน</option> -->
                      <option value="yoka">Yoka</option>
                      <option value="combo-Step">Combo-Step</option>

                    </select>
                  </div>
                  <div id = 'vipSelect' style="display:none">
                    <br>
                    <select id ="lstTrainner"   class="form-control">
                      <!-- <option value="null">--กรุณาเลือกจำนวนเดือน</option> -->
                      <option value="yoka">Steve Job</option>
                      <option value="combo-Step">Bob</option>

                    </select>
                  </div>

                </form>
                          <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->

                          <script>
                          $(document).ready(function(){
                              $('#selects').on('change', function() {
                                var myOption = $('#selects').val()
                                  // console.log(myOption);
                                if ( myOption == 'normal')
                                {
                                  $('#normalSelect').show();

                                  $('#vipSelect').hide();
                                  $('#courseSelect').hide();
                                }
                                if ( myOption == 'course')
                                {

                                  $('#normalSelect').hide();
                                  $('#vipSelect').hide();
                                  $('#courseSelect').show();
                                  // business.show();
                                }
                                if ( myOption == 'vip')
                                {
                                  $('#normalSelect').hide();
                                  $('#courseSelect').hide();
                                  $('#vipSelect').show();
                                }
                                else
                                {
                                }
                              });
                          });


                          </script>
<!--
                      </div>
                  </div>
            </div>
          <div class="modal-footer">

            <button type="button" class="btn btn-default" type ="submit">บันทึกข้อมูล</button>
          </div>

          </div>
        </div>
      </div> -->


@endsection
