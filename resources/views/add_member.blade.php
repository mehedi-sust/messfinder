@extends('layouts.app')

    @section('custom_css_js')
     @parent
    <script
    src="js/jquery-ui.js">
    </script>


    <!-- jQuery UI code for datepicker -->
    <script>
    $( function() {
    $( "#vacant_start_month" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  } );
    </script>
    <script>
    $(".delete").on("submit", function(){
        return confirm("Do you want to delete this item?");
    });
</script>
    @endsection

<body>


    <div class="container" id="form_container" style="width:65%">
    <h2 class="page-header text-center">Add Mess Member Information</h2>
    <form class="form-inline" id="member_infor_form" action="add_member" method="post">

        <div class="form-group">
            <label for="sel1">Select list:</label>
            <select class="form-control" id="sel1" name="room_id">
                @foreach($room as $room)
                    @if($room->vacant_seat > 0)
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
            <input type='date' class="form-control" placeholder="Vacant from" name="vacant_from" />
        </div>

        <div class="form-group col-xs-offset-1">
            <button class="btn btn-success" type="submit">Add</button>
        </div>
                {{csrf_field() }}
        </form>
    </div>
    <div class="container" id="table_container" style="width:65%">
        <h2 class="page-header text-center">Current Members</h2>
        <table class="table table-striped">
            <thead>
            <tr style="background-color: #5bc0de; color:#fff" >
                <th>Room No.</th>
                <th>Reg. No.</th>
                <th>Vacant From</th>
                <th></th>
            </tr>
            </thead>
            
            
            @foreach($member_info as $data)
            <tbody>
            <td>Room {{$data->room_id}}</td>
            <td>{{$data->reg}}</td>
            <td>{{$data->vacant_from}}</td>
            <td> <form class="delete" action="delete_member" method="POST">
        <input type="hidden" name="mem_reg" value="{{$data->reg}}">
        <input type="hidden" name="room_id" value="{{$data->room_id}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <input type="submit" value="Delete">
    </form></td>
             </tbody>
            @endforeach
      </table>
    </div>
</body>
</html>



