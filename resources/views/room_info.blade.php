<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Create Mess</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/modern-business.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    
    <!-- jQuery -->
    <script src="{{asset('js/jquery-3.1.1.js')}}"></script>

    <!-- jQuery -->
    <script src="{{ asset('js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    
    <!-- jQuery code for this page -->
    <script src="{{asset('js/add_room_info.js')}}"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Mess Finder</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="services.html">Services</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container" id="form_container" style="width:87%">
    <h2 class="page-header" style="text-align: center">Room Information</h2>
    <form class="form-inline" id="room_info_form">
    <div class="form-group required">
         <label for="total_room" class="control-label">Total Room: </label>
         <input type="text" class="form-control" id="total_room" placeholder="Enter total number of rooms">
    </div>
    <legend>Room 1</legend>
        
        <div class="form-group">
            <label for="seat_no">No. of Seat: </label>
            <input type="text" class="form-control" name="seat_no[]" id="seat_no">
        </div>

        <div class="form-group">
            <label for="vacant_seat">Vacant Seat: </label>
            <input type="text" class="form-control" name="vacant_seat[]" id="vacant_seat">
        </div>

        <div class="form-group">
            <label for="fare">Fare: </label>
            <input type="text" class="form-control" name="fare[]" id="fare">
        </div>
         
        <div class="form-group">
            <label for="more_info">More Information: </label>
            <textarea type="text" class="form-control" rows="3" name="more_info[]" id="more_info" placeholder="Enter additional information here..."></textarea>
        </div>
        <div class="form-group" id="next_div">
            <button class="btn btn-success" id="next_button">Next</button>
        </div>
        </form>
    </div>    
</body>
</html>
