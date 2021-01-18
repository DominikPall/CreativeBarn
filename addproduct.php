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
        <link rel="stylesheet" href="login.css">
    </head>
    
    <body>
    <form id="form">
        <label for="pname">Product Name</label><br>
        <input type="text" id="pname" name="pname" required><br>
        <label for="price">Price</label><br>
        <input type="text" id="price" name="price" required>
        <label for="pic">Picture</label><br>
        <input type="text" id="pic" name="pic" required>
        <label for="desc">Description</label><br>
        <input type="text" id="desc" name="desc" required>
        <br>
        <br>
        <input type="submit">
    </form>
    </body>
</html>