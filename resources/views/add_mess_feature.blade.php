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
              <h2>Add Mess Features</h2>
            </div>
            <ol class="breadcrumb">
              <li><a href="{{ route('index') }}">Home</a></li>
              <li class="active">Mess Features</li>
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
<!-- begin:progress steps -->
<div class="container">
    <div class="row bs-wizard" style="border-bottom:0;">
        <div class="col-xs-2 bs-wizard-step complete">
          <div class="text-center bs-wizard-stepnum">Step 1</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="#" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">Basic Information</div>
        </div>
        
        <div class="col-xs-2 bs-wizard-step complete"><!-- complete -->
          <div class="text-center bs-wizard-stepnum">Step 2</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="#" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">Room Information</div>
        </div>
        
        <div class="col-xs-2 bs-wizard-step complete"><!-- complete -->
          <div class="text-center bs-wizard-stepnum">Step 3</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="#" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">Member Information</div>
        </div>
        
        <div class="col-xs-2 bs-wizard-step active"><!-- active -->
          <div class="text-center bs-wizard-stepnum">Step 4</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="#" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">Extra Features</div>
        </div>

        <div class="col-xs-2 bs-wizard-step disabled"><!-- active -->
          <div class="text-center bs-wizard-stepnum">Step 5</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="#" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">Upload Cover Photo</div>
        </div>
    </div>
  </div>
<!-- end:progress steps --><!-- end:progress steps -->


  <!-- begin: add member form -->
  <div class="content" id="add_member_content_form">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-arillo">
          <div class="panel-heading"><h4>Add Mess Features</h4></div>
            <div class="panel-body">
                <form class="form-inline" action = "mess_feature_added" method="post"> 
                 {{ csrf_field() }}       
                    <div class="form-group col-md-offset-2">
                        <label for="feature_name">Feature Name: </label>
                        <input name="feature_name" class="form-control" id="feature_name">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">Add</button>
                    </div>
                </form>
                <a href = "{{ route('upload_photo') }}" class="btn btn-success col-md-offset-5" id="add_mess_feature_finish_btn">Next</a>
                <!--
                <a href = "{{ route('index')}}" class="btn btn-success col-md-offset-5" id="add_mess_feature_finish_btn">Finish</a>
                -->
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

  <!-- begin:member list -->
  <div class="content" id="add_member_content_list">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
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
                        <form class="delete" action="mess_feature_deleted" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="feature_id" value="{{$data->count}}">
                        <input type="submit" class="btn btn-danger" value="Delete">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        </form>
                        </td>
                        <td></td>
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

