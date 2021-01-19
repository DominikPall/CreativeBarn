<?php 
  include 'nav&foot/header.php';
?>
    <link rel="stylesheet" href="css/form.css">
    <title>CreativeBarn Add Product</title>    
    
    <?php 
        include_once 'nav&foot/navbar.php';
    ?>
    
    <form action="functions/addProduct.func.php" method="post" id="form">
        <label for="pname">Product Name</label><br>
        <input type="text" id="pname" name="pname" required><br>
        <label for="price">Price</label><br>
        <input type="text" id="price" name="price" required><br>
        <label for="pic">Picture</label><br>
        <input type="text" id="pic" name="pic" required><br>
        <label for="desc">Description</label><br>
        <input type="text" id="desc" name="desc" required><br>
        <button type="submit" name="submit" class="btn btn-outline-dark">ADD</button>
    </form>
    </body>
</html>