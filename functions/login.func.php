<?php 
include_once "../includes/autoLoader.inc.php";
if(isset($_POST["submit"])) {
    $username = $_POST['uid'];
    $pwd = $_POST['pwd'];

    $cont = new CoversView();  
    if($cont->logAdmin($username, $pwd)) {
        session_start();
        $_SESSION["username"] = $username;
        header("location: ../index.php");
        exit();
    } else {
        header("location: ../login.php?error=wrongLogin");
        exit();
    }
}
header("location: ../login.php");
exit();

?>