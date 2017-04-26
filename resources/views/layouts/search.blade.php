<body>
    <div class = "container">
        <div class = "row">
            <div class = "col-md-12 col-md-offset-1">
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
                    <label for="fare_from">Rent Range(from):</label>
                    <input class="form-control" name="fare_from" id="vacant_seat" type="text">
                  </div>
                  <div class="col-xs-4">
                    <label for="fare_to">Rent Range(to)</label>
                    <input class="form-control" name="fare_to" id="fare_to" type="text">
                  </div>

                  <!-- I got no other way other than using a div to set up the button in the form element.But I don't think it is a good practice. So should try to change it.-->

                  <div class="col-xs-2" style="margin-top:21px">
                    <input class="form-control btn btn-success" id="search" type="submit">
                 </div>
                </div>
              </form>
            </div>
            <!-- /.col-md-5-->
            </div>
        <!-- /.row -->
        </div>
    <!-- /.container -->

    <!-- Page Content -->
    <div class="container">

        <!-- Upcoming event and Notieces section. -->
        <div class="row">
           
        </div>
        <!-- /.row -->
         
      

    </div>
    <!-- /.container -->

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>
</html>
 @yield('content') 
        