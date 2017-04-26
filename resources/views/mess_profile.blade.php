@extends('layouts.app')


   @section('custom_css_js')
     @parent 
   <!-- Custom CSS for this page-->
    <link href="{{ asset('css/view-mess.css') }}" rel="stylesheet">
    </style>
   @endsection
   
   @section('content')
   <body>

   @foreach ($mess as $value)
    <div class="container"> 
        <div class="jumbotron" style="margin-top:25px;">
            <h1>{{$value->mess_name}}</h1>
        </div>
        <!--/.jumbotron-->
   
    <div class="container2"> 
        <div class="content">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                        <h2 class="page-header text-center" style="margin-left: 10px;">Basic Information</h2>
                        <div id="table-responsive">
                            <table class="table table-striped custom-table ">
                            <tbody>
                                <tr>
                                    <td><strong>Location:</strong></td>
                                    <td><!--php code for location-->{{$value->mess_location}}</td>
                                </tr>

                                <tr>
                                    <td><strong>Distacne from campus(in KM):</strong></td>
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
                        
                        <h2 class="page-header text-center">Vacancy Informamtion</h2>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr style="background-color: #5bc0de; color:#fff">
                                        <th>Room No.</th>
                                        <th>Vacant Seat</th>
                                        <th>Vacant From</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($room as $value)
                                    <tr>
                                        <td>Room {{$value->room_id}}</td>
                                        <td>{{$value->vacant_seat}}</td>
                                        <td>September, 2017</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!--/.table-responsive-->

                       <h2 class="page-header text-center">Room Information</h2>
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
                                    <div class="col-md-12">
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
                                    <!--/.col-md-6-->
                                </div>
                                <!--/.row-->
                        </div>
                       <!--/.col-md-5-->
                    </div>
                    <!--/.row-->
                </div>
                <!-- /.content-->
           </div>     
           <!-- /.container2-->
   @endsection