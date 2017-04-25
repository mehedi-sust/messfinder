<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom CSS for Sidebar-->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- jQuery -->
    <script src="js/jquery-3.1.1.js"></script>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- jQuery code for this page -->
    <script src="js/edit_room_info.js"></script>

    <style>
        textarea{
            resize: none;
        }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
   
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
</body>
</html>
