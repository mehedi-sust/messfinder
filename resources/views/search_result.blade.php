@extends('layouts.app')

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