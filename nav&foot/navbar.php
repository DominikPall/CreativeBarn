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
            <li><a href="#">Home</a></li>
            <li><a href="#">ABOUT</a></li>
            <li><a href="#">SHOP</a></li>
            <?php
                if(isset($_SESSION["username"])) {
                  echo "<li><a href=3>ADD</a></li>";
                  echo "<li><a href=#>UPDATE</a></li>";
                  echo "<li><a href=#>REMOVE</a></li>";
                  echo "<li><a href=#>LOGOUT</a></li>";
                }
            ?>
          </ul>
        </div>
    </nav>