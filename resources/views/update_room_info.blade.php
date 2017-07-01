   @extends('layouts.app')
   @section('content')
    <!-- begin:header -->
    <div id="header" class="heading" style="background-image: url(img/img01.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1 col-sm-12">
            <div class="page-title">
              <h2>Edit Mess Information</h2>
            </div>
            <ol class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li class="active">Edit Mess Info</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- end:header -->
 
  <!-- begin: add member form -->
  <div class="content" id="add_member_content_form">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-arillo">
          <div class="panel-heading"><h4>Edit Room Information</h4></div>
            <div class="panel-body">
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
           <!-- /.panel-body -->
         </div>
         <!-- /.panel -->
       </div>
       <!-- /.col-md-8 -->
     </div>
     <!-- /.row -->
   </div>
   <!-- /.content -->
   <!-- end:add member form -->
   
   <!-- begin:footer -->
<div id="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-1 col-sm-6 col-xs-12">
        <div class="widget">
          <h5><a href="#">Home</a></h5>
          </ul>
        </div>
      </div>
      <!-- break -->
      <div class="col-md-1 col-sm-6 col-xs-12">
        <div class="widget">
            <h5><a href="#">List Mess</a></h5>
          </ul>
        </div>
      </div>
      <!-- break -->
      <div class="col-md-1 col-sm-6 col-xs-12">
        <div class="widget">
          <h5><a href="#">About</a></h5>
        </div>
      </div>
      <!-- break -->
      <div class="col-md-1 col-sm-6 col-xs-12">
        <div class="widget">
          <h5><a href="#">Contact</a></h5>
        </div>
      </div>
      <div class="col-md-3 col-md-offset-5 col-sm-6 col-xs-12">
        <div class="widget">
          <h3>Mess Finder</h3>
          <address>
            <strong>Dept. of CSE, SUST</strong><br>
            Kumargaogn, Akhalia, Sylhet-3114.<br>
            <br>
            Email : www.sust.edu
          </address>
        </div>
      </div>
      <!-- break -->
    </div>
    <!-- break -->

    <!-- begin:copyright -->
    <div class="row">
      <div class="col-md-12 copyright">
        <p>Copyright &copy; 2017 Dept. of CSE,SUST. <strong>All Right Reserved.</strong></p>
        <p>Theme : Arillo 1.0 Designed by <strong>templateninja.</strong></p>
        <a href="#top" class="btn btn-success scroltop"><i class="fa fa-angle-up"></i></a>
      </div>
    </div>
    <!-- end:copyright -->

  </div>
</div>
<!-- end:footer -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
     <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="js/gmap3.min.js"></script>
    <script src="js/jquery.easing.js"></script>
    <script src="js/jquery.jcarousel.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.backstretch.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/script.js"></script>
     
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <!-- Customized JavaScript for different pages
    ================================================== -->
    <!-- Applicable to add_room_info.blade.php -->
    <script src="js/add_room_info.js"></script>
    <!-- Applicable to edit_mess_room_info.blade.php -->
    <script src="js/edit_room_info.js"></script>
    
    @section('custom_js')

    @show

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

    <!-- jQuery UI code for datepicker -->
    <script>
    $( function() {
    $( "#vacant_start_month" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
    });
    </script>
    <script>
    $(".delete").on("submit", function(){
        return confirm("Do you want to delete this item?");
    });
</script>
  </body>
</html>
@endsection

