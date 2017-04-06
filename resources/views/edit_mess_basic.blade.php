@extends('layouts.app')

<!DOCTYPE html>

    <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                        Information Type           
                </li>
                <li>
                    <a href="#">Basic Information</a>
                </li>
                <li>
                    <a href="edit_room_info">Room Information</a>
                </li>
                <li>
                    <a href="edit_mess_member_info.html">Member Inforamtion</a>
                </li>
                <li>
                    <a href="edit_mess_feature.html">Additional Features</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

    <div class="container2"  style="width:50%" id="form_container">
      <h3 class="page-header"> Basic Information of Mess</h3>
      @foreach($mess_info as $data)
      <form id="basic_info_form" action ="mess_info_updated" method="post">

        <div class="form-group required">
          <label for="mess_name" class="control-label"> Mess Name</label>
          <input type="text" class="form-control" id="mess_name" name="mess_name" value = "{{$data->mess_name}}" required>
        </div>
        <div class="form-group required">
          <label for="mess_location" class="control-label">Location</label>
          <input type="text" class="form-control" id="mess_location" value = "{{$data->mess_location}}"  name="location" required>
        </div>

        <div class = "form-group required">
         <label for="campus_distance" class="control-label">Distance from campus</label>
         <input type="text" class="form-control" id="campus_distance" name="distance" value = "{{$data->distance}}">
        </div>

        <div class="form-group required">
         <label for="total_room" class="control-label">Total room</label>
         <input type="text" class="form-control" id="total_room" value = "{{$data->total_room}}" name="total_room" required>
        </div>
        <div class = "form-group required">
         <label for="total_seat" class="control-label">Total Seat </label>
         <input type="text" class="form-control" id="total_seat" value = "{{$data->total_seat}}" name="total_seat" required>
        </div>
        <div class = "form-group required">
         <label for="vacant_seat" class="control-label">Vacant Seat</label>
         <input type="text" class="form-control" id="vacant_seat" value = "{{$data->vacant_seat}}" name="vacant_seat" required>
        </div>

        <div class="form-group" id="next_div">
            <button class="btn btn-success" >Save</button>
        </div>
        {{csrf_field() }}
      </form>
      @endforeach
    </div>
</body>
</html>
