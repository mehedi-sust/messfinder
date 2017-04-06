@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MessFinder</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css/modern-business.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    
    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div>
                <div class="carousel-caption">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <div class="container">
      <h3>Find your desired mess easily:</h3>
      <form action="search/" method="get">
      {{csrf_field() }}
        <div class="form-group">
          <div class="col-xs-4">
            <label for="area">Area:</label>
            <input class="form-control" name="area" id="area" type="text">
          </div>
        
          <div class="col-xs-4">
            <label for="vacant_seat">Minimum Vacant Seat:</label>
            <input class="form-control" name="vacant_seat" id="vacant_seat" type="text">
          </div>
          <div class="col-xs-4">
            <label for="campus_distance">Distance from SUST(in KM):</label>
            <input class="form-control" name="distance" id="campus_distance" type="text">
          </div>
          <div class="col-xs-4">
            <label for="fare_from">Fare Range(from):</label>
            <input class="form-control" name="fare_from" id="vacant_seat" type="text">
          </div>
          <div class="col-xs-4">
            <label for="fare_to">Fare Range(to)</label>
            <input class="form-control" name="fare_to" id="fare_to" type="text">
          </div>

          <!-- I got no other way other than using a div to set up the button in the form element.But I don't think it is a good practice. So should try to change it.-->

          <div class="col-xs-2">
            <label for="search"></label>
            <input class="form-control btn btn-success" id="search" type="submit">
         </div>
        </div>
      </form>
    </div>

    <!-- Page Content -->
    <div class="container">

        <!-- Upcoming event and Notieces section. -->
        <div class="row">
           
        </div>
        <!-- /.row -->
         
        
        

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>
</html>
