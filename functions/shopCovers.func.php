<?php
    include_once 'includes/autoLoader.inc.php';

    $amount = 0;
    if(isset($_GET['q'])) {
        $amount = $_GET['q'];
    }

    $covers = new CoversView();
    $result = $covers->showCover();

    for( $i = $amount; $i < 6 + $amount; $i++) {
        $newCover = $result[$i];
        $pics = $covers->showPicture($newCover['coverID']);
            if($i%3 == 0) {
                echo "</div>";
                $rowName = "";
                if($i/3 == 0) {
                    $rowName = "onerow";
                } else if ($i/3 == 1) {
                    $rowName = "tworow";
                } else if ($i/3 == 2) {
                    $rowName = "threerow";
                }

                echo "<div class='row $rowName'>";
            }

            $firstPic = $pics[0]['url'];
            echo "<a href=#><div class='col-sm-4 prod'>
                <h1> $newCover[name] </h1>
                <img  src='img/$firstPic' id='pic'> 
                <h5>$newCover[price]$</h5>
                <button>BUY NOW</button>
            </div> </a>"; 
        if($i == count($result)-1) {
            break;
        }
    }

    echo "</div>"

?>