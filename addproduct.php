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
    <form action="functions/addProduct.func.php" method="post" id="form">
        <label for="pname">Product Name</label><br>
        <input type="text" id="pname" name="pname" required><br>
        <label for="price">Price</label><br>
        <input type="text" id="price" name="price" required><br>
        <label for="pic">Picture</label><br>
        <input type="text" id="pic" name="pic" required><br>
        <label for="desc">Description</label><br>
        <input type="text" id="desc" name="desc" required><br>
        <button type="submit" name="submit" role ="button" class="btn btn-outline-dark">ADD</button>
    </form>
    </body>
</html>