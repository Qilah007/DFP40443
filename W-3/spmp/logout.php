<?php session_start();
    //destroyed all session data
    session_destroy();

    //optional: unset specific session variables
    unset($_SESSION['loggedin']);
    unset($_SESSION['username']);

    //redirect to login page
    header("Location: login.php");
    exit();
?>