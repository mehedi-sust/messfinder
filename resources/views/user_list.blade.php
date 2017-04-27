@extends('layouts.app')

@if(Auth::check() and Auth::user()->type == "Admin")
<div class="jumbotron">
    <h1>User List</h1> <vr>
    <br>
</div>
<table class="table table-striped" border='1' align = 'center'>
<tr style="background-color: #5bc0de; color:#fff">
<th>Count</th>
<th>Name</th>
<th>Reg No.</th>
<th>Mobile No.</th>
<th>Type</th><th></th><th></th>
</tr>
           
<?php     
$i=1;
  ?>    @foreach ($user as $data) 
 <?php $mess_id = $data->mess_id;
 $a = "mess_profile?id=".$mess_id;
 ?>
            <tr>
            <td><?php echo $i++;?></td>
            <td><a href=<?php echo $a;?>>{{$data->name}}</a></td>
            <td>{{$data->reg}}</td>
            <td>{{$data->mobile}}</td>
            <td>{{$data->type}}</td>
            <td><button type="button" class="btn btn-info">edit</button></td>
            <td><button type="button" class="btn btn-danger">remove</button>
            </td></tr>
@endforeach
{{ $user->links() }}
 </table>

@endif