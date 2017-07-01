<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Carousel Example</h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <!--
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>

    </ol>
   -->

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="img/site_slide1.jpg" alt="Los Angeles">
        <div class="carousel-caption">
          
        </div>
      </div>

      	
  	@foreach ($mess as $data)
  	<?php 
  	$link = "/storage/banner_".$data->mess_id.".jpg";
if(file_exists( public_path() . $link) )
 {
    $filename = "banner_".$data->mess_id.".jpg";
    //    return Storage::allfiles('public');
    $url = Storage::url($filename);
    //echo $url."<br>";
    echo '
    <div class="item">
        <img src="'.$url.'" alt="New York" style="width:100%;">
        ';?>
        <div class="carousel-caption">
          <h3>{{$data->mess_name}}</h3>
          <h4>Location : {{$data->mess_location}}</h4>
          <p>Vacant Seat : {{$data->vacant_seat}}</p>
          <p>Total Seat : {{$data->total_seat}}</p>
        </div>
      </div>
      <?php
      
} ?>  

  	@endforeach

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>