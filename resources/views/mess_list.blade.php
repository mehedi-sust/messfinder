@extends('layouts.app')

@if(Auth::check() and Auth::user()->type == "Admin")

@section('content')
<div id="header" class="heading" style="background-image: url(img/img01.jpg); min-height:120px; height:175px">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1 col-sm-12">
            <div class="page-title" style="margin-bottom: 10px">
              <h2>Mess List</h2>
            </div>
            <ol class="breadcrumb">
              <li><a href="{{ route('index') }}">Home</a></li>
              <li><a href="{{ route('admin_home') }}">Admin Dashboard</a></li>
              <li class="active">Mess List</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- end:header -->

<div class="content" id="mess_profile_content">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-arillo">
          <div class="panel-heading"><h4>Users List</h4></div> 
            <div class="table-responsive">
              <table class="table table-striped table-bordered">
              <thead>
                <tr>
                <th>Count</th>
                <th>Mess Name</th>
                <th>Location</th>
                <th>Total Seats</th>
                <th>Rooms</th>
                <th>Vacant Seat(s)</th>
                <th>Distance from sust</th>
                <th>Created On</th>
                </tr>
              </thead>
            <tbody>
            <?php     
            $i=1;
              ?>    @foreach ($mess as $data) 
             <?php $mess_id = $data->mess_id;
             $a = "mess_profile?id=".$mess_id;
             ?>
                <tr>
                <td><?php echo $i++;?></td>
                <td><a href=<?php echo $a;?>>{{$data->mess_name}}</a></td>
                <td>{{$data->mess_location}}</td>
                <td>{{$data->total_seat}}</td>
                <td>{{$data->total_room}}</td>
                <td>{{$data->vacant_seat}}</td>
                <td>{{$data->distance}} KM</td>
                <td>{{ date('F d, Y', strtotime($data->created_at)) }}</td>
                </tr>
            @endforeach 
             </tbody>
            </table>
            </div>
          <!--/.table-responsive-->
        </div>
        <!--/.panel panel-arillo-->
        {!! $mess->render() !!}
      </div>
      <!--/.col-md-5-->
    </div>
    <!--/.row-->
  </div>
  <!-- /.content-->
@endif
@endsection