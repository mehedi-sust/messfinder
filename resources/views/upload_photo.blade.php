@extends('layouts.app')

@section('content')
@if(Auth::check() and Auth::user()->type == "Manager")
<!-- begin:header -->
    <div id="header" class="heading" style="background-image: url(img/img01.jpg); min-height:120px; height:175px">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1 col-sm-12">
            <div class="page-title" style="margin-bottom: 10px">
              <h2>Create Mess</h2>
            </div>
            <ol class="breadcrumb">
              <li><a href="{{ route('index') }}">Home</a></li>
              <li class="active">Create Mess</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- end:header -->

<!-- begin:progress steps -->
<div class="container">
    <div class="row bs-wizard" style="border-bottom:0;">
        <div class="col-xs-2 col-xs-offset-1 bs-wizard-step complete">
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
        
        <div class="col-xs-2 bs-wizard-step complete"><!-- active -->
          <div class="text-center bs-wizard-stepnum">Step 4</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="#" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">Extra Features</div>
        </div>

        <div class="col-xs-2 bs-wizard-step active"><!-- active -->
          <div class="text-center bs-wizard-stepnum">Step 5</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="#" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">Upload Cover Photo</div>
        </div>
       </div>
     </div>
     <!-- end:progress steps -->


 
   <!-- begin: photo  upload form -->
  <div class="content col-md-offset-3" id="cover_photo_update_form">
    <div class="row">
      <div class="col-md-5 col-md-offset-3">
        <div class ="panel panel-arillo">
          <div class="panel-heading"><h4>Upload Cover Photo</h4></div>
            <div class="panel-body">
		      <form action="uploaded" enctype="multipart/form-data" method="post">
		      <!--
		        <label for="image">Mess Banner</label>
		        <input type="file" class="form-control" id="upload_image" name="image" >
		        <input type="submit" value="Upload" class="btn btn-success" >
               -->
		        <div class="form-group">
                  <label for="upload_image">Mess Banner</label>
                  <input type="file" class="form-control" id="upload_image" name="image">
                </div>

                <div class="form-group col-md-offset-5">
                  <input type="submit" value="Upload" class="btn btn-success" >
                </div>
		        {{csrf_field() }}
		      </form>
		      <a href = "{{ route('manage_mess')}}" class="btn btn-success col-md-offset-5">Finish</a>
        	</div>
         <!--/.panel-body-->
      </div>
      <!--/.panel-arillo-->
    </div>
    <!--/.col-md-10 col-md-offset-1-->
  </div>
  <!--/.row-->
</div>
<!--/.content-->
<!-- end: photo  upload form -->
@endif
@endsection