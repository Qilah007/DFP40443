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
        $celsius=null;
        if($_SERVER['REQUEST_METHOD'] == "POST"){
        $kelvin =$_POST['kelvinVal'];

        $celsius=$kelvin - 273.15;
        }
    
        if ($celcius > 100) {
            echo "very hot today"
        } elseif($celcius<50){
            echo "it's mild today"
        } else{
            echo "it's cold today"
        }
        
    ?>

    <?php
        echo $celsius;
    ?>
</html>