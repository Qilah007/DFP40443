<?php
    //auth_check.php
    session_start();

    //if the user session doesn't exist, redirect them to login immediately
    if(!isset($_SESSION['user_id'])){
        header("Location: login.php");
        exit(); //Always exit after a header redirect
    }
?>