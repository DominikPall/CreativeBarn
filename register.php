<?php
  include 'nav&foot/header.php';
?>


    <link rel="stylesheet" href="css/form.css">
    <title>Creative Barn Register</title>
    <?php 
      include_once 'nav&foot/navbar.php';
    ?>
    
    <form action="functions/register.func.php" method="post" id="form">
        <label for="uid">User Name</label><br>
        <p id="error"></p>
        <input type="text" id="uid" name="uid" required><br>
        <label for="pwd">Password</label><br>
        <input type="text" id="pwd" name="pwd" required>
        <?php 
          if(isset($_GET['error'])) {
            if($_GET["error"] == "adminExists") {
              echo "<p>Admin already exists, cannot create new admin</p>";
            }
          }
        ?>
        <br>
        <br>
        <button type="submit" name="submit" class="btn btn-outline-dark">Sign Up</button>
    </form>
    </body>
</html>