<?php
$config = include('config/app_config.php');
?>
<html>
    <head>
        <title><?php echo $config['site_name']; ?></title>
    </head>
    <body>
        <form action="index.php" method="POST">
            <label>Username:</label><br>
            <input type="text" placeholder="Enter ID"><br><br>

            <label>Password:</label><br>
            <input type="password"><br><br>

            <input type="submit" value="login">
        </form>
    </body>
</html>