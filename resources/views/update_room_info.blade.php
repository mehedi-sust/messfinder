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
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/modern-business.css') }}" rel="stylesheet">

    <!-- Custom CSS for Sidebar-->
    <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    
    <!-- jQuery -->
    <script src="{{ asset('js/jquery-3.1.1.js') }}"></script>

    <!-- jQuery -->
    <script src="{{ asset('js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    
    <!-- jQuery code for this page -->
    <script src="{{ asset('js/edit_room_info.js') }}"></script>

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
   
    <div class="container2" id="form_container" style="width:50%; margin-left: 25%;">
    <h2 class="page-header" style="text-align: center">Edit Room Information</h2>
    
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
</body>
</html>
