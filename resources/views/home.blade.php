@extends('layouts.app')

@if (!Auth::check())
@extends('layouts.search')


@elseif(Auth::check() and Auth::user()->type == "User")

<?php 
    $mess_id = Auth::user()->mess_id;
?>
   
 <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <?php if($mess_id == 0) {?>
                <li>

                    <a href="create_mess">Create New Mess</a>
                </li>
                <?php } else {?>
                <li>
                    <a href="<?php echo "mess_profile?id=".$mess_id ?>">View My Mess</a>
                </li>

                <li>
                    <a href="notice">Notice Board</a>
                </li>
                <li>
                    <a href="msg">Message and Request</a>
                </li>
                <?php } ?>
            </ul>
        </div>

@elseif(Auth::check() and Auth::user()->type == "Manager")

<?php 
    $mess_id = Auth::user()->mess_id;
?>

 <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li >
                    <a href="edit_mess"> Manage Your Mess </a>           
                </li>
                <?php if($mess_id == 0) {?>
                <li>k

                    <a href="create_mess">Create New Mess</a>
                </li>
                <?php } else {?>
                <li>
                    <a href="<?php echo "mess_profile?id=".$mess_id ?>">View My Mess</a>
                </li>

                <li>
                    <a href="notice">Notice Board</a>
                </li>
                <li>
                    <a href="msg">Message and Request</a>
                </li>
                <?php } ?>
            </ul>
        </div>
@endif
