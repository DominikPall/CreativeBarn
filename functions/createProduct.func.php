<?php
$name = "";

if(isset($_GET['q'])) {
    $id = $_GET['q'];
}

$covers = new CoversView();
$result = $covers->showCoverById($id);
$pic = $covers->showPicture($id)[0];

echo "<div class='row'>
        <div class='col-sm-6'>
            <img src='img/$pic[url]'>
        </div>
        <div class='col-sm-6'>
            <h1>Ahoj</h1>
        </div>
      </div>
"
?>