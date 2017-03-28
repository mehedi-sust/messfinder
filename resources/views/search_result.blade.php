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
                <td><button type="submit" class="btn btn-info">Apply</button> </td>
            </tr>
            <tr>
                <td>Room 1</td>
                <td>2012331023</td>
                <td>Mehedi The Ultimate Boss</td>
            </tr>
            <tr>
                <td>Room 1</td>
                <td>2012331023</td>
                <td>Mehedi The Ultimate Boss</td>
            </tr>
            <tr>
                <td>Room 1</td>
                <td>2012331023</td>
                <td>Mehedi The Ultimate Boss</td>
            </tr>
<?     
var $i=1;
  ?>    @foreach ($mess as $mess) 
            <tr>
            <td>{{$i++}}</td>
            <td>{{$mess->mess_id}}</td>
            <td>{{$mess->mess_name}}</td>
            <td>{{$mess->mess_location}}</td>
            </tr>
@endforeach

 </table>