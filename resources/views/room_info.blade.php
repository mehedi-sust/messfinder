@extends('layouts.app')

@foreach ($mess as $value)

@if (!Auth::check())
Sorry You cannot access this Page. Please Log in first.


@elseif(Auth::check() and $value->room_info == 'no')
    <!-- Navigation -->

    <div class="container2" id="form_container" style="width:87%">
    <h2 class="page-header" style="text-align: center">Room Information</h2>
    {{$value->room_info}}
    <form class="form-inline" id="room_info_form">
    <div class="form-group required">
         <label for="total_room" class="control-label">Total Room: </label>
         <input type="text" class="form-control" id="total_room" placeholder="Enter total number of rooms">
    </div>
    <legend>Room 1</legend>
        
        <div class="form-group">
            <label for="seat_no">No. of Seat: </label>
            <input type="text" class="form-control" name="seat_no[]" id="seat_no">
        </div>

        <div class="form-group">
            <label for="vacant_seat">Vacant Seat: </label>
            <input type="text" class="form-control" name="vacant_seat[]" id="vacant_seat">
        </div>

        <div class="form-group">
            <label for="fare">Fare: </label>
            <input type="text" class="form-control" name="fare[]" id="fare">
        </div>
         
        <div class="form-group">
            <label for="more_info">More Information: </label>
            <textarea type="text" class="form-control" rows="3" name="more_info[]" id="more_info" placeholder="Enter additional information here..."></textarea>
        </div>
        <div class="form-group" id="next_div">
            <button class="btn btn-success" id="next_button">Next</button>
        </div>
        </form>
    </div>    
    @else

<div class="container2" id="form_container" style="width:50%">

<h2> Error!!! Wrong Page.</h2>

</div>
@endif
@endforeach