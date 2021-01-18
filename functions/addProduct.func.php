<?php 
include_once "../includes/autoLoader.inc.php";
if(isset($_POST["submit"])) {
    $pname = $_POST['pname'];
    $price = $_POST['price'];
    $pic = $_POST['pic'];
    $desc = $_POST['desc'];

    $cont = new CoversContr();  
    if($cont->setCovers($pname, $desc,$price,$pic)) {
        header("location: ../addproduct.php?suc=productAdded");
        exit();
    } else {
        header("location: ../addproduct.php?error=wrongInformation");
        exit();
    }
}
header("location: ../addproduct.php");
exit();

?>