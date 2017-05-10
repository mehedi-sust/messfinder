@extends('layouts.app')

@if(Auth::check() and Auth::user()->type == "Admin")
<!DOCTYPE html>
<html lang="en">

<head>

</head>


<body>

    <!-- Navigation -->
   
    <div class="container2" id="form_container" style="width:80%; margin-left: 260px;">
    <h2 class="page-header" style="text-align: center">Upload Advertisement</h2>
    
    <form action="uploaded_ad" enctype="multipart/form-data" method="post">

    

       		
            <label for="image1">Advertisement 1</label><br>
            <label>Current Advertisement: </label>
		<?php 
    $filename = "advertisement_1.jpg";
    //    return Storage::allfiles('public');
    $url = Storage::url($filename);
    //echo $url."<br>";
    echo "<img src='".$url."' width =800 hieght=300/>";
?>

            <input type="file" class="form-control" id="image1" name="image1" >
            <input type="submit" class="btn btn-info" value="Upload" >
        {{csrf_field() }}
</form>

 <form action="uploaded_ad" enctype="multipart/form-data" method="post">

    

       
            <label for="image2">Advertisement 2</label>
            <input type="file" class="form-control" id="image2" name="image2" >
            <input type="submit" class="btn btn-info" value="Upload" >
        {{csrf_field() }}
</form>

 <form action="uploaded_ad" enctype="multipart/form-data" method="post">

    

       
            <label for="image3">Advertisement 3</label>
            <input type="file" class="form-control" id="image3" name="image3" >
            <input type="submit" class="btn btn-info" value="Upload" >
        {{csrf_field() }}
</form>

 <form action="uploaded_ad" enctype="multipart/form-data" method="post">

    

       
            <label for="image4">Advertisement 4</label>
            <input type="file" class="form-control" id="image4" name="image4" >
            <input type="submit" class="btn btn-info" value="Upload" >
        {{csrf_field() }}
</form>

</div>

</body>
</html>
@endif