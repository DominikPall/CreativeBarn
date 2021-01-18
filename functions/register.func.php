<?php
include_once "../includes/autoLoader.inc.php";
if(isset($_POST["submit"])) {
    $username = $_POST['uid'];
    $pwd = $_POST['pwd'];

    $cont = new CoversContr();

    if($cont->createAdmin($username, $pwd)) {
    } else {
        header("location: ../register.php?error=adminExists");
        exit();
    }
    header("location: ../index.php");
}
header("location: ../login.php");
?>