@extends('layouts.app')

@section('content')

@if(Auth::check() and Auth::user()->type == "Manager")

<!-- begin:header -->
    <div id="header" class="heading" style="background-image: url(img/img01.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1 col-sm-12">
            <div class="page-title">
              <h2>Manage Mess</h2>
            </div>
            <ol class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li class="active">Manage Mess</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- end:header -->


<div class="content" id="manage_mess_content">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-arillo">
        <div class="panel-heading"><h4>Manage Mess Information</h4></div>
          <div class="panel-body">
            <div class="list-group" style="text-align: center;">
              <a href="edit_mess" class="list-group-item">Edit Mess Basic Information</a>
              @foreach($check as $data)
              @if($data->room_info == "no")
              <a href="room_info" class="list-group-item">Add Room Information</a>
              @else
              <a href="edit_room_info" class="list-group-item">Edit Room Information</a>
              @endif
              @endforeach
              <a href="add_member" class="list-group-item">Update Mess Member List</a>
              <a href="update_mess_feature" class="list-group-item">Update Mess Features</a>
              <a href="upload_photo" class="list-group-item">Change Mess Cover Photo</a>
              <a href="change_manager" class="list-group-item">Change Manager</a>
            </div>
            <!-- /.list-group-->
          </div>
          <!--/.panel-body-->
      </div>
      <!--/.panel panel-arillo-->
    </div>
    <!--/.col-md-6 col-md-offset-3-->
  </div>
  <!--/.row-->
</div>
<!--/.content-->

@else

<h2> ERROR!!! You do not access this page.</h2>
@endif
<!-- /.content -->
<!-- end:form -->
@endsection