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
    <script src="{{ asset('js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    
    <!-- jQuery code for this page -->
    <script src="{{asset('js/add_mess_feature.js')}}"></script>

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
                <a class="navbar-brand" href="/">Mess Finder</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="/">Home</a>
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

   <div class="container" id="form_container" style="width:50%">
      <h3 class="page-header">Basic Information of Mess</h3>
      <form id="basic_info_form" action="/mess_created" method="post">
      {{csrf_field() }}
        <div class="form-group required">
          <label for="mess_name" class="control-label"> Mess Name</label>
          <input type="text" class="form-control" id="mess_name" name="mess_name" placeholder="Enter mess name" required>
        </div>
        <div class="form-group required">
          <label for="mess_location" class="control-label">Location</label>
          <input type="text" class="form-control" id="mess_location" placeholder="Enter location of mess" name="location" required>
        </div>
        <div class="form-group required">
         <label for="total_room" class="control-label">Total room</label>
         <input type="text" class="form-control" id="total_room" placeholder="Enter total number of rooms" name="total_room" required>
        </div>
        <div class = "form-group required">
         <label for="total_seat" class="control-label">Total Seat </label>
         <input type="text" class="form-control" id="total_seat" placeholder="Enter total number of seats" name="total_seat" required>
        </div>
        <div class = "form-group required">
         <label for="vacant_seat" class="control-label">Vacant Seat</label>
         <input type="text" class="form-control" id="vacant_seat" placeholder="Enter total number of vacant seats" name="vacant_seat" required>
        </div>
        <div class = "form-group required">
         <label for="campus_distance" class="control-label">Distance from campus (in minutes)</label>
         <input type="text" class="form-control" id="campus_distance" name="distance" placeholder="Enter the time required to reach campus from mess">
        </div>
           <div class="form-group">
               <label for="add_button">Has additional features to include?</label>
               <button type="button" id="add_button" class="btn btn-success">Add Feature</button>
           </div>

           <div class="form-group" id="next_div">
            <button class="btn btn-success" >Next</button>
        </div>

      </form>
    </div>
</body>
</html>