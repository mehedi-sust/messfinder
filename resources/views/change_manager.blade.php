@extends('layouts.app')
        
@section('content') 

    <!-- begin:header -->
    <div id="header" class="heading" style="background-image: url(img/img01.jpg); min-height:120px; height:175px">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1 col-sm-12">
            <div class="page-title" style="margin-bottom: 10px">
              <h2>Change Mess Manager</h2>
            </div>
            <ol class="breadcrumb">
              <li><a href="{{ route('index') }}">Home</a></li>
              <li class="active">Change Mess Manager</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- end:header -->

<div class="content" id="change_manager_content">
  <div class="row">
    <!-- begin: navigantion sidebar -->
    <div class="col-md-3">
      <div class="nav-side-menu">
        <div class="brand">Manage Mess Information</div>
        <!--
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
        -->
              <div class="menu-list">
                <ul id="menu-content" class="menu-content collapse out">
                    <li>
                      <a href="edit_mess" ><i class="fa fa-info-circle fa-lg"></i>Edit Mess Basic Information</a>
                    </li>

                    <li>
                      @foreach($mess_info as $data)
                      @if($data->room_info == "no")
                      <a href="room_info"><i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>Add Room Information</a>
                      @else
                      <a href="edit_room_info"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>Edit Room Information</a>
                      @endif
                      @endforeach
                    </li>


                    <li>
                      <a href="edit_mess_member" ><i class="fa fa-users fa-lg" aria-hidden="true"></i>Update Mess Member List</a>
                    </li>  

                    <li>
                      <a href="update_mess_feature" ><i class="fa fa-gift fa-lg" aria-hidden="true"></i>Update Mess Features</a>
                    </li>

                    <li>
                      <a href="update_cover_photo" ><i class="fa fa-camera-retro fa-lg" aria-hidden="true"></i>Change Mess Cover Photo</a>
                    </li>

                     <li>
                      <a href="change_manager" ><i class="fa fa-user fa-lg" aria-hidden="true"></i>Change Manager</a>
                    </li>
                </ul>
              </div>
           </div>
        </div>
    <!-- end: navigantion sidebar -->

    <div class="col-md-5 col-md-offset-1">
      <div class="panel panel-arillo">
        <div class="panel-heading"><h4>Change Mess Manager</h4></div>
          <div class="panel-body">
            <form class="form-inline">
                <div class="form-group">
                    <select class="form-control" name="manager_name" id="manager_name">
                    @foreach($users as $value)
                    <option>{{$value->name}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group col-md-offset-1" id="submit_div">
                    <input type="submit" class="btn btn-success" value="Make Manager">
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    @endsection