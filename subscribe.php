<?php 
  include 'nav&foot/header.php';
?>
<title>CreativeBarn Subscribe</title> 
<link rel="stylesheet" href="css/form.css">
<?php 
  include_once 'nav&foot/navbar.php';
?>

    <form action="functions/addSub.func.php" method="post" id="form">
    <label for="uname">Name</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="email">Email</label><br>
    <input Type="email"
      id="email" name="email" required>
    <br>
    <br>
    <button type="submit" name="submit" class="btn btn-outline-dark">Subscribe</button>
    <?php 
      if(isset($_GET['q'])) {
        echo "<p>Thank you for subscribing</p>";
      }
    ?>
    </form>
</body>
</html>