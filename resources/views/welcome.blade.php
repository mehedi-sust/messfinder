@extends('layouts.app')

@if (!Auth::check())
@extends('layouts.search')


@elseif(Auth::check())

<?php 
    $mess_id = Auth::user()->mess_id;
?>

 <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                        Manage Mess           
                </li>
                <?php if($mess_id == 0) {?>
                <li>

                    <a href="#">Create New Mess</a>
                </li>
                <?php } else ?>
                <li>
                    <a href="<?php echo "mess_profile?id=".$mess_id ?>">View My Mess</a>
                </li>
            </ul>
        </div>

@endif