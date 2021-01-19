<?php
include 'coversView.class.php';
class Product {

    function createShop($amount) {
        $covers = new CoversView();
        $result = $covers->showCover();
        
        for( $i = $amount; $i < 6 + $amount; $i++) {
            $newCover = $result[$i];
            $pics = $covers->showPicture($newCover['coverID']);
                if($i%3 == 0) {
                    echo "</div>";
                    $rowName = "";
                    if(($i-$amount)/3 == 0) {
                        $rowName = "onerow";
                    } else if (($i-$amount)/3 == 1) {
                        $rowName = "tworow";
                    }                
                    echo "<div class='row $rowName'>";
                }

                $firstPic = $pics[0]['url'];
                echo "<a href=product.php?q=$newCover[coverID]><div class='col-sm-4 prod'>
                    <img  src='img/$firstPic' id='pic'> 
                    <h1> $newCover[name] </h1>
                    <h5>$newCover[price]$</h5>
                    <button>BUY NOW</button>
                </div> </a>"; 
            if($i == count($result)-1) {
                break;
            }
        }
        echo "</div> </a>";

        
        if ($amount + 6 >= count($result) || $amount >= 6) {
            echo "<button onclick='prev()' id='footer'>prev</button>";
        }
        if($amount + 6 < count($result)) {
            echo "<button onclick='next()' id='footer'>next</button>";
        }

    }

    function createProduct($id) {
        $cover = new CoversView();
        $pic = $cover->showPicture($id);
        $pic = $pic[0];
        $cover = $cover->showCoverById($id);

        
        echo "<h1>$cover[name]</h1>";
        echo "<h1>$cover[description]</h1>";
        echo "<h1>$cover[price]$</h1>";
        echo "<img src='../img/$pic[url]'>";
    }
}
?>