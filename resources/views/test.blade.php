 @extends('layouts.app')
 <div class="container2">
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
                                                            <td><strong>Rent:</strong></td>
                                                            <td>{{$value->cost}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Members:</strong>
                                                            <td>
                                                                <ul>
                                             @foreach($member as $person)
                                             	@if($person->room_id==$value->room_id)
                                             	<li>{{$person->name}} </li>
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