<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>

          <a class="navbar-brand" href="#">Creative Barn</a>
        </div>
    
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="shop.php">SHOP</a></li>
            
            <?php
                if(isset($_SESSION["username"])) {
                  echo "<li><a href=addproduct.php>ADD</a></li>";
                  echo "<li><a href=edit.php>UPDATE</a></li>";
                  echo "<li><a href=functions/logout.func.php>LOGOUT</a></li>";
                }
            ?>

          </ul>
        </div>
    </nav>