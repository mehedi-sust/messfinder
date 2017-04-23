@extends('layouts.app')

@if (!Auth::check())
@extends('layouts.search')


@elseif(Auth::check())

 <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                        Manage Mess           
                </li>
                <li>
                    <a href="#">Create New Mess</a>
                </li>
                <li>
                    <a href="#">View My Mess</a>
                </li>
            </ul>
        </div>

@endif
<!--

/*$location = $_GET['area'];
$seat = $_GET['vacant_seat'];
$distance = $_GET['distance'];
$rent_start = $_GET['fare_from'];
$rent_last = $_GET['fare_to'];

-->

