@extends('layouts.app')

@section('content')
<div class = "container">
    <div class = "row">
        <div class = "col-md-10 col-md-offset-1">
            <div class="jumbotron">
                <h3>Search Results</h3> <vr>
                <br>
                <form action="/">
               <button type="submit" class="btn btn-primary">Search Again</button>
                </form>
            </div>
            <table class="table table-striped" border='1' align = 'center'>
            <thead>
            <tr style="background-color: #5bc0de; color:#fff">
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

@endsection