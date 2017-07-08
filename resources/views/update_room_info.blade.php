   @extends('layouts.app')
   @section('content')
    <!-- begin:header -->
    <div id="header" class="heading" style="background-image: url(img/img01.jpg); min-height:120px; height:175px">
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
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-arillo">
          <div class="panel-heading"><h4>Edit Room Information</h4></div>
            <div class="panel-body">
              <form id="room_info_form" action="/update_room_info_table" method="post">
              {{csrf_field() }}
    
              <legend>Room {{$room_info["room_id"]}}</legend>

              <div class="form-group">
                <label for="seat_no">No. of Seat: </label>
                <input type="text" class="form-control" id="seat_no" value = "{{$room_info["total_seat"]}}" name="seat_no"  >
              </div>
               
              <div class="form-group">
                <label for="vacant_seat">Vacant Seat: </label>
                <input type="text" class="form-control" id="vacant_seat" value = "{{$room_info["vacant_seat"]}}" name="vacant_seat"  >
              </div>

              <div class="form-group">
                <label for="fare">Rent: </label>
                <input type="text" class="form-control" id="fare" value = "{{$room_info["cost"]}}" name="fare"  >
              </div>
               
              <div class="form-group">
                <label for="additonal_info">More Information: </label>
                <textarea type="text" class="form-control" rows="2" id="additional_info" value = "{{$room_info["add_info"]}}" name="add_info" ></textarea>
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

