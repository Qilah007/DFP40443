<?php session_start();
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if($username == "user" && $password =="pass123"){
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("Location: landing.php");
        exit();
        }else{
            $error = "invalid credentials!";
        }
    }
?>

<form method="POST">
    <input type="text" name="username">
    <input type="password" name="password">
    <input type="submit">Login</button>
</form>
