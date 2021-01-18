<?php 
  include 'includes/autoLoader.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Creative Barn Shop</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/form.css">
    </head>
    
    <body>
    <form action="functions/login.func.php" method="post" id="form">
        <label for="uid">User name</label><br>
        <input type="text" id="uid" name="uid" required><br>
        <label for="pwd">Password</label><br>
        <input type="text" id="pwd" name="pwd" required>
        <br>
        <br>
        <button type="submit" name="submit" role ="button" class="btn btn-outline-dark">Login</button>
    </form>

    <script>
    </body>
</html>