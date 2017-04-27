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
    <div class="container" id="form_container" style="width:70%">
        <div class = "row">
            <div class= "col-md-8 col-md-offset-2">
                <h3 class="page-header text-center">Add Mess Features</h3>
                <form class="form-inline" action = "mess_feature_added" method="post"> 
                 {{ csrf_field() }}       
                    <div class="form-group">
                        <label for="vacant_start_month"> New Feature: </label>
                        <input name="feature_name" class="form-control" id="vacant_start_month">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">Add</button>
                    </div>
                    <!--
                    <div class="form-group col-md-offset-4" id="submit_div">
                        <button class="btn btn-success">Save</button>
                    </div>
                    -->
                </form>
            </div>
            <!--/.col-md-8 col-md-offset-2-->
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->

    <div class="container" id="table_container" style="width:70%">
        <div class = "row">
            <div class = "col-md-8 col-md-offset-2">
                <h3 class="page-header text-center">Current Features</h3>
                <table class="table table-striped">
                    <thead>
                    <tr style="background-color: #5bc0de; color:#fff" >
                        <th>Feature Name</th>
                        <th></th>
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
                        </tr>
                    @endforeach
                    </tbody>
              </table>
            </div>
        </div>
    </div>
@endsection