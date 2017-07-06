@extends('layouts.app')

   @section('custom_css_js')
     @parent 
   <!-- Custom CSS for this page-->
   <link href="{{ asset('css/view-mess.css') }}" rel="stylesheet">
   <style>
        img{
            display: block;
            margin:auto;
            width:100%;
            height:300px;
        }
        .right_aligned{
            text-align: right;
        }
        .left_aligned{
            text-align: left;
        }
   </style>

   @endsection

@section('content')
<!-- begin:header -->
    <div id="header" class="heading" style="background-image: url(img/img01.jpg); min-height:120px; height:175px">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1 col-sm-12">
            <div class="page-title" style="margin-bottom: 10px">
              <h2>Update Mess Features</h2>
            </div>
            <ol class="breadcrumb">
              <li><a href="{{ route('index') }}">Home</a></li>
              <li class="active">Update Mess Features</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- end:header -->

<?php 
$i=0;
foreach ($current_features as $value) {
  $i++;
}
?>

  <!-- begin: add member form -->
  <!--
  <div class="content" id="add_member_content_form">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-arillo">
          <div class="panel-heading"><h4>Update Mess Features</h4></div>
            <div class="panel-body">
                <form class="form-inline" action = "update_mess_feature_added" method="post"> 
                 {{ csrf_field() }}       
                    <div class="form-group col-md-offset-2">
                        <label for="feature_name">Feature Name: </label>
                        <input name="feature_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">Add</button>
                    </div>
                </form>
                <a href = "{{ route('manage_mess') }}" class="btn btn-success col-md-offset-5" id="add_mess_feature_finish_btn">Done</a>
            </div>
         </div>
       </div>
     </div>
   </div>
   -->
   <!-- end:add member form -->

  <!-- begin:member list -->
  <div class="content" id="add_member_content_list">
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

      <div class="col-md-6 col-md-offset-1">
        <div class="panel panel-arillo">
          <div class="panel-heading"><h4>Current Features</h4></div>
              <table class="table table-striped">
                    <thead>
                        <th>Feature Name</th>
                        <th class="right_aligned">Delete Feature</th>
                        <th><button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-add-feature">Add Feature</button></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($current_features as $data)
                        <tr>
                        <td class="left_aligned">{{$data->feature}}</td>
                        <td class="right_aligned">
                        <form class="delete" action="update_mess_feature_deleted" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="feature_id" value="{{$data->count}}">
                        <input type="submit" class="btn btn-danger" value="Delete">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        </form>
                        </td>
                        </tr>
                    @endforeach
                    </tbody>
              </table>
          </div>
            <!-- /.panel -->
        </div>
         <!-- /.col-md-8 -->
      </div>
     <!-- /.row -->
    </div>
    <!-- /.content -->
  <!-- end:member list -->

  <!-- begin:modal-add-feature -->
    <div class="modal fade" id="modal-add-feature" tabindex="-1" role="dialog" aria-labelledby="modal-add-feature" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Add Feature</h4>
          </div>
          <div class="modal-body">
            <form class="form-inline" action = "mess_feature_added" method="post"> 
                 {{ csrf_field() }}       
                    <div class="form-group col-md-offset-2">
                        <label for="feature_name">Feature Name: </label>
                        <input name="feature_name" class="form-control" id="feature_name">
                    </div>
                    <div class="form-group modal-footer">
                        <button class="btn btn-success">Add</button>
                    </div>
            </form>
          </div>
          </div>
        </div>
      </div>
    <!-- end:modal-add-feature -->   
@endsection

