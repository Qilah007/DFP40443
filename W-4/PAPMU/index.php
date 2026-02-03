<?php
    $config = include('config/app_config.php');
    require_once('includes/alumni_logic.php');

    $isLoggedIn=false;
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        try {
            $user = $_POST['username'];
            $pass = $_POST['password'];

            if(($user !== $config['admin_user']) || $pass !== $config['admin_password']){
                //pengguna x sah 
            } $isLoggedIn=true;
        }catch (Exception $e){

        }
    }
?>
<html>
    <head>
        <title><?php echo $config['site_name']; ?></title>
    </head>
    <body style="background-color: <?php echo $config['theme_color'];?>">
        <header>
            <?php if($isLoggedIn) ?>
            WELCOME <?php echo $_POST['admin_user']; ?>
            <?php $endif; ?>
            <nav>
                <ul style="display:flex; list-style-type: style none;">
                    <?php echo generateMenu($pages); ?>
                </ul>
            </nav>
        </header>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
        <footer></footer>
    </body>
</html>
