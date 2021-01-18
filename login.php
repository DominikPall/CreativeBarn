<?php 
  include 'nav&foot/header.php';
?>
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
</body>
</html>