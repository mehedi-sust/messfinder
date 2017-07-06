@extends('layouts.app')
@section('content')
  <!-- begin:header -->
    <div id="header" class="heading" style="background-image: url(img/img01.jpg); min-height:120px; height:175px">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1 col-sm-12">
            <div class="page-title" style="margin-bottom: 10px">
              <h2>Edit Room Information</h2>
            </div>
            <ol class="breadcrumb">
              <li><a href="{{ route('index') }}">Home</a></li>
              <li class="active">Edit Room Information</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- end:header -->

<!-- begin:room list -->
  <div class="content" id="add_member_content_list">
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
                      @foreach($mess_info as $data)
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
    
      <div class="col-md-8 col-md-offset-1">
        <div class="panel panel-arillo">
          <div class="panel-heading"><h4>Room Information</h4></div>
              <table class="table table-striped">
              <thead>
              <!--style="background-color: #5bc0de; color:#fff" -->
                <tr>
                  <th>Room No.</th>
                  <th>No. of Seat</th>
                  <th>Vacant Seat</th>
                  <th>Rent</th>
                  <th>Additional Information</th>
                  <th>Edit</th>
                </tr>
              </thead>
                
              <tbody>
              @foreach($room_info as $data)
                <tr>
                  <td>Room {{$data->room_id}}</td>
                  <td>{{$data->total_seat}}</td>
                  <td>{{$data->vacant_seat}}</td>
                  <td>{{$data->cost}}</td>
                  <td>{{$data->add_info}}</td>
                  <td>
                    <a class="btn btn-info" href = "{{ route('edit_single_room_info', ['room_id' => $data->room_id, 'total_seat' => $data->total_seat, 'vacant_seat' =>$data->vacant_seat, 'cost'=>$data->cost, 'add_info'=>$data->add_info]) }}" id="edit_button">Edit</a>
                  </td>
                  <td>
                    <a class="btn btn-info" data-toggle="modal" data-target="#modal-edit-room-info- {{ ['room_id' => $data->room_id, 'total_seat' => $data->total_seat, 'vacant_seat' =>$data->vacant_seat, 'cost'=>$data->cost, 'add_info'=>$data->add_info]) }}" id="edit_button">Edit Modal</a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
        </div>
        <!-- /.panel -->
      </div>
      <!-- /.col-md-8 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.content -->
  <!-- end:room list -->

  <!-- begin:modal-edit-room-info -->
    <div class="modal fade" id="modal-edit-room-info" tabindex="-1" role="dialog" aria-labelledby="modal-edit-room-info" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Edit Room Information</h4>
          </div>
          <div class="modal-body">
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
          </div>
        </div>
      </div>
    <!-- end:modal-edit-room-info -->   
@endsection



