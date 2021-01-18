<?php 
    include_once "../includes/autoLoader.inc.php";

    $name = $_POST['name'];
    $price  = $_POST['price'];
    $desc = $_POST['desc'];
    $id = $_POST['id'];

    $cov = new CoversContr();

    if($_POST["submit"] == "delete") {
        $cov->deleteCovers($id);
        header("location: ../edit.php?q=deleted");
    } else if ($_POST["submit"] == "edit") {
        $cov->updateCovers($name, $desc, $price, $id);
        header("location: ../edit.php?q=success");
    }
    
?>