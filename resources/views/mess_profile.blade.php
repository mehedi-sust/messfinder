@extends('layouts.app')

   <head>
      <title>Mess Profile</title>
      <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MessFinder</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css/modern-business.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
   </head>
   
   <body>
   @foreach ($mess as $value)
    <div class="container2"> 
        <div class="content">
            <div class="row">
                <div class="col-md-5">
                    <div class="container">
                        <div class="jumbotron" style="margin-top:25px;">
                            <h1>{{$value->mess_name}}</h1>
                            
                        </div>
                        <!--/.jumbotron-->
                    </div>
                    <!--/.conatiner-->

                        <h3 class="page-header" style="margin-left: 10px;">Basic Information</h3>
                        <div id="table-responsive">
                            <table class="table custom-table">
                            <tbody>
                                <tr>
                                    <td><strong>Location:</strong></td>
                                    <td><!--php code for location-->{{$value->mess_location}}</td>
                                </tr>

                                <tr>
                                    <td><strong>Distacne from campus(in minutes):</strong></td>
                                    <td><!--php code-->{{$value->distance}}</td>
                                </tr>

                                <tr>
                                    <td><strong>Total Room:</strong></td>
                                    <td><!--php code--> {{$value->total_room}}</td>
                                </tr>

                                <tr>
                                    <td><strong>Total Seat:</strong></td>
                                    <td><!--php code--> {{$value->total_seat}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Vacant Seat:</strong></td>
                                    <td><!--php code--> {{$value->vacant_seat}}</td>
                                </tr>
         @endforeach


                                <tr>
                                    <td><strong>Features:</strong></td>
                                    <td>
                                    <ul >
                                    @foreach($feature as $value)
                                    
                                        <li>{{$value->feature}}</li>
                                        
                                    @endforeach
                                    </ul>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--/.table-responsive-->
                        
                        <h3 class="page-header">Vacancy Informamtion</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Room No.</th>
                                        <th>Vacant Seat</th>
                                        <th>Vacant From</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($room as $value)
                                    <tr class="info">
                                        <td>Room {{$value->room_id}}</td>
                                        <td>{{$value->vacant_seat}}</td>
                                        <td>September, 2017</td>
                                    </tr>
                                @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                        <!--/.table-responsive-->

                       <h3 class="page-header">Room Information</h3>
                            <div class="container">
                                <ul class="nav nav-pills">
                                    @foreach($room as $value)
                                    <?php 
                                        $id = $value->room_id;
                                        $link = "<a href='#room".$id."' data-toggle='tab'>";
                                        if($id==1){
                                    ?>
                                    <li class="active">
                                    <?php }
                                    else echo"<li>";
                                       echo $link; ?>
                                        Room {{$value->room_id}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!--/.container-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="tab-content clearfix">
                                        @foreach ($room as $value)
                                        <?php
                                         $id = $value->room_id;
                                         if($id==1){
                                        $link = "<div class='tab-pane active' id='room".$id."'>";
                                        }
                                        else $link = "<div class='tab-pane' id='room".$id."'>";
                                         
                                         echo $link;
                                        ?>
                                                <div class="table-responsive">
                                                    <table class="table custom-table">
                                                    <tbody>
                                                        <tr>
                                                            <td><strong>Total Seat:</strong></td>
                                                            <td>{{$value->total_seat}}</td>
                                                        </tr>

                                                        <tr>
                                                            <td><strong> Vacant:</strong></td>
                                                            <td>{{$value->vacant_seat}}</td>
                                                        </tr>

                                                        <tr>
                                                            <td><strong>Rent:</strong></td>
                                                            <td>{{$value->cost}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Members:</strong>
                                                            <td>
                                                                <ul>
                                             @foreach($member as $person)
                                                @if($person->room_id==$value->room_id)
                                                <li><a href="">{{$person->name}}</a> </li>
                                                @endif


                                             @endforeach
                                                                    
                                                                </ul>

                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!--/.table-responsive-->                
                                            </div>
                                            <!--/.tab-pane-->
                                            @endforeach
                                       </div>
                                        <!--/.tab-content clearfix-->
                                    </div>
                                    <!--/.col-md-5-->
                                </div>
                                <!--/.row-->

                            <!--</div>-->
                            <!--/.container-->
                        </div>
                       <!--/.col-md-5-->
                    </div>
                    <!--/.row-->
                </div>
                <!-- /.content-->
           </div>
     </strong>
     </div>
   </body>
</html>