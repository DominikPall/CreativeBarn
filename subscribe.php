<?php 
  include 'nav&foot/header.php';
?>

<link rel="stylesheet" href="css/form.css">
</head>

<body>
    <form action="functions/addSub.func.php" method="post" id="form">
    <label for="uname">Name</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="email">Email</label><br>
    <input Type="email"
      id="email" name="email" required>
    <br>
    <br>
    <button type="submit" name="submit" role ="button" class="btn btn-outline-dark">Subscribe</button>
    <?php 
      if(isset($_GET['q'])) {
        echo "<p>Thank you for subscribing</p>";
      }
    ?>
    </form>
</body>
</html>