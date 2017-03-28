@extends('layouts.app')

<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css/modern-business.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">

    <!-- Custom Fonts -->

<div class="jumbotron">
    <h1>The Search Results</h1> <vr>
    <br>
    <form action="/">
   <button type="submit" class="btn btn-primary">Search Again</button>
    </form>
</div>
<table class="table table-striped" border='1' align = 'center'>
<tr style="background-color: #5bc0de; color:#fff">
<th>Count</th>
<th>Mess Name</th>
<th>Location</th>
<th>Distance</th>
<th></th>
</tr>

            <tr>
                <td>1</td>
                <td><a href="">Shajalal Mess</a></td>
                <td>Surma R/A</td>
                <td> 5 km</td>
                <td><form action="/">
   <button type="submit" class="btn btn-info">Apply</button>
    </form></td>
            </tr>
           
<?php     
$i=1;
  ?>    @foreach ($mess as $mess) 
 <?php $mess_id = $mess->mess_id;
 $a = "mess_profile?id=".$mess_id;
 ?>
            <tr>
            <td><?php echo $i++;?></td>
            <td><a href=<?php echo $a;?>>{{$mess->mess_name}}</a></td>
            <td>{{$mess->mess_location}}</td>
            <td>{{$mess->distance}}</td>
            <td><form action="/">
   <button type="submit" class="btn btn-info">Apply</button>
    </form></td>
            </tr>
@endforeach

 </table>