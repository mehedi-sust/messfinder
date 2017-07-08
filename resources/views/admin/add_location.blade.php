@extends('layouts.app')
@section('content')
  <div id="header" class="heading" style="background-image: url(img/img01.jpg); min-height:120px; height:175px">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1 col-sm-12">
            <div class="page-title" style="margin-bottom: 10px">
              <h2>Add Location</h2>
            </div>
            <ol class="breadcrumb">
              <li><a href="{{ route('index') }}">Home</a></li>
              <li><a href="{{ route('admin_home') }}">Admin Home</a></li>
              <li class="active">Add Location</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- end:header -->

  <!-- begin: add location form -->
  <!--
  <div class="content" id="add_member_content_form">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-arillo">
          <div class="panel-heading"><h4>Add Location</h4></div>
            <div class="panel-body">
            <form class="form-inline" id="add_location" action="add_location" method="post">
                
                <div class="form-group">
                    <label for="location"> Location: </label>
                    <input type="text" class="form-control" name="location" id="location">
                </div>

                <div class="form-group col-md-offset-1">
                    <button class="btn btn-success" type="submit">Add</button>
                </div>
                {{csrf_field() }}
            </form>
            </div>
         </div>
       </div>
     </div>
   </div>
   -->
   <!-- end:add location form -->
  
  <!-- begin:member list -->
  <div class="content" id="add_member_content_list">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-arillo">
          <div class="panel-heading"><h4>Location List</h4></div>
              <table class="table table-striped">
              <thead>
              <!--style="background-color: #5bc0de; color:#fff" -->
                <tr>
                  <th>Serial</th>
                  <th>Location</th>
                  <th><button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-add-location">Add Location</button></th>
                </tr>
              </thead>
              <?php  
                $i = 1;
                ?>
                @foreach($location as $data)
              <tbody>
                <td> <?php echo $i++; ?></td>
                <td>{{$data->location}}</td>
                <td></td>
                </td>
              </tbody>
              @endforeach
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

  <!-- begin:modal-add-location -->
    <div class="modal fade" id="modal-add-location" tabindex="-1" role="dialog" aria-labelledby="modal-add-location" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Add Location</h4>
          </div>
          <div class="modal-body">
            <form class="form-inline" id="add_location" action="add_location" method="post">
                <div class="form-group">
                    <label for="location"> Location: </label>
                    <input type="text" class="form-control" name="location" id="location">
                </div>

                <div class="form-group col-md-offset-1">
                    <button class="btn btn-success" type="submit">Add</button>
                </div>
                {{csrf_field() }}
            </form>
          </div>
          </div>
        </div>
      </div>
    <!-- end:modal-add-location -->   
@endsection
