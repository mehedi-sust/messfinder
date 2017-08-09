   @extends('layouts.app')
   @section('content')
    <!-- begin:header -->
    <div id="header" class="heading" style="background-image: url(/img/img01.jpg); min-height:120px; height:175px">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1 col-sm-12">
            <div class="page-title" style="margin-bottom: 10px">
              <h2>Edit Mess Information</h2>
            </div>
            <ol class="breadcrumb">
              <li><a href="{{ route('index') }}">Home</a></li>
              <li class="active">Edit Mess Info</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- end:header -->
 
  <!-- begin: update single room info form -->
  <div class="content" id="add_member_content_form">
    <div class="row">

    <!-- begin: navigantion sidebar -->
    <div class="col-md-3">
      <div class="nav-side-menu">
        <div class="brand">Manage Mess Information</div>
        <!--
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
        -->
            <div class="menu-list">
                <ul id="menu-content" class="menu-content collapse out">
                    <li>
                      <a href="edit_mess" ><i class="fa fa-info-circle fa-lg"></i>Edit Mess Basic Information</a>
                    </li>

                    <li>
                      @foreach($mess as $data)
                      @if($data->room_info == "no")
                      <a href="room_info"><i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>Add Room Information</a>
                      @else
                      <a href="edit_room_info"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>Edit Room Information</a>
                      @endif
                      @endforeach
                    </li>

                    <li>
                      <a href="edit_mess_member" ><i class="fa fa-users fa-lg" aria-hidden="true"></i>Update Mess Member List</a>
                    </li>  

                    <li>
                      <a href="update_mess_feature" ><i class="fa fa-gift fa-lg" aria-hidden="true"></i>Update Mess Features</a>
                    </li>

                    <li>
                      <a href="update_cover_photo" ><i class="fa fa-camera-retro fa-lg" aria-hidden="true"></i>Change Mess Cover Photo</a>
                    </li>

                     <li>
                      <a href="change_manager" ><i class="fa fa-user fa-lg" aria-hidden="true"></i>Change Manager</a>
                    </li>
                </ul>
        </div>
      </div>
    </div>
    <!-- end: navigantion sidebar -->

      <div class="col-md-7 col-md-offset-1">
        <div class="panel panel-arillo">
          <div class="panel-heading"><h4>Edit Room Information</h4></div>
            <div class="panel-body">
              <form id="room_info_form" action="/update_room_info_table" method="post">
              {{csrf_field() }}
    
              <legend>Room {{$room_info["room_id"]}}</legend>

              <input type="hidden" class="form-control" id="room_id" value = "{{$room_info["room_id"]}}" name="room_id">

              <div class="form-group">
                <label for="seat_no">No. of Seat: </label>
                <input type="text" class="form-control" id="seat_no" value = "{{$room_info["total_seat"]}}" name="seat_no"  >
              </div>
               
              <div class="form-group">
                <label for="vacant_seat">Vacant Seat: </label>
                <input type="text" class="form-control" id="vacant_seat" value = "{{$room_info["vacant_seat"]}}" name="vacant_seat"  readonly>
              </div>

              <div class="form-group">
                <label for="fare">Rent: </label>
                <input type="text" class="form-control" id="fare" value = "{{$room_info["cost"]}}" name="fare"  >
              </div>
               
              <div class="form-group">
                <label for="additonal_info">More Information: </label>
                <textarea type="text" class="form-control" rows="2" id="additional_info" name="add_info" >{{$room_info["add_info"]}}</textarea>
              </div>
              <div class="form-group" id="next_div">
                <button type="submit" class="btn btn-primary" id="next_button">Update</button>
              </div>
              </form>
           </div>
           <!-- /.panel-body -->
         </div>
         <!-- /.panel -->
       </div>
       <!-- /.col-md-8 -->
     </div>
     <!-- /.row -->
   </div>
   <!-- /.content -->
   <!-- end: update single room info form -->
@endsection

