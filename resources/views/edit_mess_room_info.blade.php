@extends('layouts.app')
@section('content')
  <!-- begin:header -->
    <div id="header" class="heading" style="background-image: url(img/img01.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1 col-sm-12">
            <div class="page-title">
              <h2>Edit Room Information</h2>
            </div>
            <ol class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li class="active">Edit Room Information</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- end:header -->

    <div class="container2" id="form_container" style="width:78%; margin-left: 15%;">
    <h2 class="page-header" style="text-align: center">Edit Room Information</h2>
    
    <form class="form-inline" id="room_info_form" action="update_room_info" method="post">
    @foreach($room_info as $data)
    
    <legend>Room {{$data->room_id}}</legend>
        
        <div class="form-group">
            <label for="seat_no">No. of Seat: </label>
            <input type="text" class="form-control" id="seat_no" value = "{{$data->total_seat}}" name="seat_no[]" style="width:100px;" readonly>
        </div>

        <div class="form-group">
            <label for="vacant_seat">Vacant Seat: </label>
            <input type="text" class="form-control" id="vacant_seat" value = "{{$data->vacant_seat}}" name="vacant_seat[]" style="width:100px;" readonly>
        </div>

        <div class="form-group">
            <label for="fare">Rent: </label>
            <input type="text" class="form-control" id="fare" value = "{{$data->cost}}" name="fare[]" style="width:100px;" readonly>
        </div>
         
        <div class="form-group">
            <label for="additonal_info">More Information: </label>
            <textarea type="text" class="form-control" rows="3" id="additional_info" value = "{{$data->add_info}}" style="width:200px;" name="add_info[]" readonly></textarea>
        </div>
        <div class="form-group" id="edit_div">
            <a class="btn btn-info" href = "{{ route('edit_single_room_info', ['room_id' => $data->room_id, 'total_seat' => $data->total_seat, 'vacant_seat' =>$data->vacant_seat, 'cost'=>$data->cost, 'add_info'=>$data->add_info]) }}" id="edit_button">Edit</a>
        </div>
        <!--
        <div class="form-group" id="next_div">
            <button class="btn btn-danger" id="next_button">Delete</button>
        </div>
        -->
        @endforeach
        </form>        
    </div>

<!-- begin:room list -->
  <div class="content" id="add_member_content_list">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
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
                
                
                @foreach($member_info as $data)
              <tbody>
                <th>Room {{$data->room_id}}</th>
                <th>{{$data->reg}}</th>
                @if($data->vacant_from != NULL)
                <th>{{date('F d, Y', strtotime($data->vacant_from))}}</th>
                @else
                <th></th>
                @endif
                <th> 
                <form class="delete" action="delete_member" method="POST">
                  <input type="hidden" name="mem_reg" value="{{$data->reg}}">
                  <input type="hidden" name="room_id" value="{{$data->room_id}}">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                  <input type="submit" value="Delete" class="btn btn-danger" >
                </form>
                </th>
              </tbody>
              @endforeach
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
@endsection



