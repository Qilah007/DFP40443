<!DOCTYPE html>
    <head>
    </head>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label>K</label>
            <input name="kelvinVal" type="num">
            <input type="submit" value="Calculate">
    </body>

    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
        $kelvin =$_POST['kelvinVal'];

        $celsius=$kelvin - 273.15;
        }
    ?>

    <?php
        echo $celsius;
    ?>
</html>