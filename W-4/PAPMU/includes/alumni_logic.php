<?php
    $pages=[
        "Home" => "index.php",
        "Directory" => "directory.php",
        "Giving" => "donations.php",
        "Events" => "events.php"
    ];

    function generateMenu($pages){
        $html = "";
        foreach($pages as $name => $url){
            $html.="<li><a href='$url' style='color: white; margin-right:15px;'>$name</a></li>";
        }
        return $html;
    }
?>

<?php
    //donation calculation with excaption handling
    function calculateDonationPerHead($totalAmount,$contributorCount){
        if ($contributorCount <= 0) {
        // Stop the script from crashing and provide a reason

        throw new Exception("You need at least 1 contributor to
        calculate a split.");
        }
        return $totalAmount/$contributorCount;
    }
?>