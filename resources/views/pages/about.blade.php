@extends('layouts.app')
    
    @section('content')
    <!-- Page Content -->

    <!-- begin:header -->
    <div id="header" class="heading" style="background-image: url(http://localhost:8000/img/img01.jpg); min-height:120px; height:175px">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1 col-sm-12">
            <div class="page-title" style="margin-bottom: 10px">
              <h2>About Us</h2>
            </div>
            <ol class="breadcrumb">
              <li><a href="{{ route('index') }}">Home</a></li>
              <li class="active">About Us</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- end:header -->
    <div class="container">

        <!-- Introduction Row -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">About 
                    <small>MessFinder</small>
                </h1>
                <p>Web Engineering Course Project.</p>
            </div>
        </div>

        <!-- Team Members Row -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Our Team</h2>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="http://i.imgur.com/lLPM7jW.jpg" style="width: 200px" alt="">
                <h3>Raihan Ahmed
                    <small>Reg: 2012331020</small>
                </h3>
                <p>E-mail: raihan_sust20@student.sust.edu</p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                <h3>Mehedi Al Hasan
                    <small>Reg: 2012331023</small>
                </h3>
                <p>E-mail: mehedialhasan@student.sust.edu</p>
            </div>
        <hr>
        </div>


    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
   @endsection