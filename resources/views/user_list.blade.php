@extends('layouts.app')

@if(Auth::check() and Auth::user()->type == "Admin")

@section('content')
<div id="header" class="heading" style="background-image: url(img/img01.jpg); min-height:120px; height:175px">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1 col-sm-12">
            <div class="page-title" style="margin-bottom: 10px">
              <h2>User List</h2>
            </div>
            <ol class="breadcrumb">
              <li><a href="{{ route('index') }}">Home</a></li>
              <li><a href="{{ route('admin_home') }}">Admin Home</a></li>
              <li class="active">User List</li>
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
                        <th>Name</th>
                        <th>Reg No.</th>
                        <th>Mobile No.</th>
                        <th>Type</th>
                    </tr>
                </thead>

                <tbody>    
                <?php     
                $i=1;
                ?>    @foreach ($user as $data) 
                 <?php $mess_id = $data->mess_id;
                 $a = "mess_profile?id=".$mess_id;
                 ?>
                    <tr>
                    <td><?php echo $i++;?></td>
                    <td><a href=<?php echo $a;?>>{{$data->name}}</a></td>
                    <td>{{$data->reg}}</td>
                    <td>0{{$data->mobile}}</td>
                    <td>{{$data->type}}</td>
                    <!--   <td><button type="button" class="btn btn-info">edit</button></td>
                    <td><button type="button" class="btn btn-danger">remove</button></td>
                    -->
                    </tr>
                @endforeach
                </tbody>
            </table>
            <!--
            {{ $user->links() }}
            -->
          </div>
          <!--/.table-responsive-->
        </div>
        <!--/.panel panel-arillo-->
        {!! $user->render() !!}
      </div>
      <!--/.col-md-5-->
    </div>
    <!--/.row-->
  </div>
  <!-- /.content-->
@endsection
@endif