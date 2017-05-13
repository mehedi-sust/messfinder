@extends('layouts.app')

@section('content')

<div id="header" class="heading" style="background-image: url(img/img01.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1 col-sm-12">
            <div class="page-title">
              <h2>Search Result</h2>
            </div>
            <ol class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li class="active">Search Result</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- end:header -->

<div class="content" id="search_result_content">
    <div class = "container">
        <div class = "row">
            <div class = "col-md-10 col-md-offset-1">
                <table class="table table-striped" border='1' align = 'center'>
                <thead>
                    <tr style="background-color: #48cfad; color:#fff">
                        <th>Count</th>
                        <th>Mess Name</th>
                        <th>Location</th>
                        <th>Distance(KM)</th>
                </tr>
                </thead>

            <tbody>   
            <?php     
            $i=1;
              ?>    @foreach ($mess as $data) 
             <?php $mess_id = $data->mess_id;
             $a = "http://localhost:8000/mess_profile?id=".$mess_id;
             ?>
                        <tr>
                        <td><?php echo $i++;?></td>
                        <td><a href=<?php echo $a;?>>{{$data->mess_name}}</a></td>
                        <td>{{$data->mess_location}}</td>
                        <td>{{$data->distance}}</td>
                      <!--  <td><form action="/">
               <button type="submit" class="btn btn-info">Apply</button>
                </form></td> -->
                        </tr>
            @endforeach
            {{$mess->links()}}
            </tbody>
        </table>
        </div>
        </div>
    </div>
</div>
@endsection