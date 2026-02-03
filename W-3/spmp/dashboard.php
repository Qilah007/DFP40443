<?php 
    require_once 'auth_check.php'; //The gatekeeper
    include_once 'header.php'; //the UI

    if(!isset(?$_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
        header("Location: login.php");
        exit();
    }
?>

<html>

