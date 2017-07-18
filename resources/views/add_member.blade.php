@extends('layouts.app')
@section('content')
  <!-- begin:header -->
    <div id="header" class="heading" style="background-image: url(img/img01.jpg); min-height:120px; height:175px">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1 col-sm-12">
            <div class="page-title" style="margin-bottom: 10px">
              <h2>Add Mess Member</h2>
            </div>
            <ol class="breadcrumb">
              <li><a href="{{ route('index') }}">Home</a></li>
              <li class="active">Add Mess Member</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- end:header -->

<?php 
$i=0;
foreach ($member_info as $value) {
  $i++;
}
$vacant_seat = 0;
foreach ($room as $value) {
  $temp = $value->vacant_seat;
  $vacant_seat += $temp; 
}
if($i==0){

?>

  <!-- begin:progress steps -->
<div class="container col-md-offset-1">
    <div class="row bs-wizard" style="border-bottom:0;">
        <div class="col-xs-2 bs-wizard-step complete">
          <div class="text-center bs-wizard-stepnum">Step 1</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="#" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">Basic Information</div>
        </div>
        
        <div class="col-xs-2 bs-wizard-step complete"><!-- complete -->
          <div class="text-center bs-wizard-stepnum">Step 2</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="#" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">Room Information</div>
        </div>
        
        <div class="col-xs-2 bs-wizard-step active"><!-- complete -->
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
<?php } if ($vacant_seat == 0) echo "No vacancy....Cause No vacant seat . Need nice presentation .... from Mehedi";  ?>


  <!-- begin: add member form -->
  <div class="content" id="add_member_content_form">
    <div class="row">
      <div class="col-md-9 col-md-offset-1">
        <div class="panel panel-arillo">
          <div class="panel-heading"><h4>Add Member Information</h4></div>
            <div class="panel-body">
            <form class="form-inline" id="member_infor_form" action="add_member" method="post">
                <div class="form-group">
                    <label for="sel1">Room No.:</label>
                    <select class="form-control" id="sel1" name="room_id">
                        @foreach($room as $value)
                            @if($value->vacant_seat > 0)
                            <option value ="{{$value->room_id}}" > Room {{$value->room_id}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="reg_no"> Reg. No.: </label>
                    <input type="text" class="form-control" name="reg_no" id="reg_no">
                </div>

                <div class="form-group">
                <label>Vacant from :</label>
                <input  type="text" class="form-control" id="vacant_start_month" name="vacant_from" />
                </div>

                <div class="form-group col-md-offset-1">
                    <button class="btn btn-success" type="submit">Add</button>
                </div>
                {{csrf_field() }}
            </form>
                <a href = "{{ route('add_mess_feature')}}" class="btn btn-success col-md-offset-5" id="add_member_next_btn">Next</a>
            </div>
         </div>
       </div>
     </div>
   </div>
   <!-- end:add member form -->
  
  <!-- begin:member list -->
  <div class="content" id="add_member_content_list">
    <div class="row">
      <div class="col-md-9 col-md-offset-1">
        <div class="panel panel-arillo">
          <div class="panel-heading"><h4>Member List</h4></div>
              <table class="table table-striped">
              <thead>
              <!--style="background-color: #5bc0de; color:#fff" -->
                <tr>
                  <th>Room No.</th>
                  <th>Reg. No.</th>
                  <th>Vacant From</th>
                  <th>Delete Member</th>
                  <th><button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-add-member">Add Member</button></th>
                </tr>
              </thead>
                
                @foreach($member_info as $data)
              <tbody>
                <td>Room {{$data->room_id}}</td>
                <td>{{$data->reg}}</td>
                @if($data->vacant_from != NULL)
                <td>{{date('F d, Y', strtotime($data->vacant_from))}}</td>
                @else
                <td></td>
                @endif
                <td> 
                <form class="delete" action="delete_member" method="POST">
                  <input type="hidden" name="mem_reg" value="{{$data->reg}}">
                  <input type="hidden" name="room_id" value="{{$data->room_id}}">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                  <input type="submit" value="Delete" class="btn btn-danger" >
                </form>
                </td>
                <td></td>
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
  <!-- end:member list -->

  <!-- begin:modal-add-member -->
    <div class="modal fade" id="modal-add-member" tabindex="-1" role="dialog" aria-labelledby="modal-add-member" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Add Member</h4>
          </div>
          <div class="modal-body">
            <form class="form-inline" id="member_infor_form" action="add_member" method="post">
                <div class="form-group">
                    <label for="sel1">Room No.:</label>
                    <select class="form-control" id="sel1" name="room_id">
                        @foreach($room as $room)
                            @if( $room->vacant_seat > 0)
                            <option value ="{{$room->room_id}}" > Room {{$room->room_id}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="reg_no"> Reg. No.: </label>
                    <input type="text" class="form-control" name="reg_no" id="reg_no">
                </div>

                <div class="form-group">
                <label>Vacant from :</label>
                <input  type="text" class="form-control" id="vacant_start_month" name="vacant_from" />
                </div>

                <div class="form-group modal-footer">
                    <button class="btn btn-success" type="submit">Add</button>
                </div>
                {{csrf_field() }}
            </form>
          </div>
          </div>
        </div>
      </div>

    <!-- end:modal-add-member -->  
<script type="text/javascript">
  $("#modal-add-member")
.modal("show")
.on("shown.bs.modal", function () {
    window.setTimeout(function () {
        $("#customerAdded").modal("hide");
        location.reload(); 
    }, 5000);                 
});
</script>

@endsection


