@extends('layouts.app')

@section('content')
<!-- begin:header -->
    <div id="header" class="heading" style="background-image: url(img/img01.jpg); min-height:120px; height:175px">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1 col-sm-12">
            <div class="page-title" style="margin-bottom: 10px">
              <h2>Create Mess</h2>
            </div>
            <ol class="breadcrumb">
              <li><a href="{{ route('index') }}">Home</a></li>
              <li class="active">Create Mess</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- end:header -->

@if(Session::has('message'))
<div class="alert alert-success alert-dismissable" style="text-align: center;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
  <strong>{{ Session::get('message') }}.</strong>
</div>
@endif 

<!-- begin:progress steps -->
<div class="container col-md-offset-1">
    <div class="row bs-wizard" style="border-bottom:0;">
        <div class="col-xs-2 bs-wizard-step complete">
          <div class="text-center bs-wizard-stepnum">Step 1</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="#" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">Basic Information</div>
        </div>
        
        <div class="col-xs-2 bs-wizard-step active"><!-- complete -->
          <div class="text-center bs-wizard-stepnum">Step 2</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="#" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">Room Information</div>
        </div>
        
        <div class="col-xs-2 bs-wizard-step disabled"><!-- complete -->
          <div class="text-center bs-wizard-stepnum">Step 3</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="#" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">Member Information</div>
        </div>
        
        <div class="col-xs-2 bs-wizard-step disabled"><!-- active -->
          <div class="text-center bs-wizard-stepnum">Step 4</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="#" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">Extra Features</div>
        </div>

        <div class="col-xs-2 bs-wizard-step disabled"><!-- active -->
          <div class="text-center bs-wizard-stepnum">Step 5</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="#" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">Upload Cover Photo</div>
        </div>
    </div>
  </div>
<!-- end:progress steps -->
    
<!-- begin:room info form -->
<div class="content" id="room_info_content">
  <div class="row">
    <div class="col-md-9 col-md-offset-2">
    <!--
      <h2 class="page-header text-center" style="text-align: center">Room Information</h2>
    -->
    <div class="panel panel-arillo">
      <div class="panel-heading"><h4>Room Information</h4></div>
        <div class="panel-body" id="add_room_info_form">
          <form class="form-inline" action="room_info_inserted" method = "post" id="room_info_form">

          {{csrf_field()}}
          @foreach($mess as $data)
            <div class="form-group required">
              <input type="hidden" class="form-control" id="total_room" value="{{$data->total_room}}"> 
            </div>
            @endforeach

            <legend>Room 1</legend>
            
            <div class="form-group">
                <label for="seat_no">No. of Seat: </label>
                <input type="text" class="form-control" name="seat_no[]" id="seat_no" required>
            </div>
           <!-- <div class="form-group">
                <label for="vacant_seat_no">Vacant Seat: </label>
                <input type="text" class="form-control" name="vacant_seat_no[]" id="vacant_seat_no" required>
            </div>
            -->
            <div class="form-group">
                <label for="fare">Rent: </label>
                <input type="text" class="form-control" name="fare[]" id="fare" required>
            </div>
             
            <div class="form-group">
                <label for="more_info">More Information: </label>
                <textarea type="text" class="form-control" rows="3" name="more_info[]" id="more_info" placeholder="Enter additional information here.Enter N/A if nothing to add." required></textarea>
            </div>

            <div class="form-group col-xs-offset-5" id="add_room_info_btn">
                <button class="btn btn-success btn-lg" id="next_button">Next</button>
            </div>
          </form>
        </div>
         <!--/.panel-body-->
      </div>
      <!--/.panel-arillo-->
    </div>
    <!--/.col-md-8 col-md-offset-2-->
  </div>
  <!--/.row-->
</div>
<!--/.content-->

<!-- end: room info form -->
@endsection