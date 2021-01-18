<?php 
    include_once '../includes/autoLoader.inc.php';

    $email = $_POST['email'];
    $name = $_POST['name'];

    $covers = new CoversContr();
    $covers->addSubscriber($name, $email);

    header('location: ../subscribe.php?q=suc');
?>