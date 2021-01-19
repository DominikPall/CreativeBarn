<?php 
  include 'nav&foot/header.php';
?>
<link rel="stylesheet" href="css/form.css">
<title>CreativeBarn Login</title> 
<?php 
  include_once 'nav&foot/navbar.php';
?>
    <form action="functions/login.func.php" method="post" id="form">
    <label for="uid">User name</label><br>
    <input type="text" id="uid" name="uid" required><br>
    <label for="pwd">Password</label><br>
    <input type="text" id="pwd" name="pwd" required>
    <br>
    <br>
    <button type="submit" name="submit" class="btn btn-outline-dark">Login</button>
    </form>
</body>
</html>