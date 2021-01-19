<?php 
  include 'nav&foot/header.php';
?>

<title>Creative Barn</title>
<link rel="stylesheet" href="css/shop.css">

<script>
  var x = 0;
    function next() {
      x+= 6;
      load();
    }

    function prev() {
      x-=6;
      load();
    }

    function load() {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("shop").innerHTML = "";
          document.getElementById("shop").innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", "functions/shopCovers.func.php?q=" + x, true);
      xhttp.send();
      window.location.href='#nadpis';
    }
  </script>
  
  <div class = "row" id="nadpis">
    <h1> SHOP </h1>
  </div>
  <div id='shop'>
    <script>load()</script>
  </div>
  </body>
</html>