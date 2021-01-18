<?php
  include 'nav&foot/header.php';
?>
        <title>Creative Barn Shop</title>
        <link rel="stylesheet" href="css/index.css">
      </head>
     
      <?php 
        include 'nav&foot/navbar.php';
      ?>

      <div class="row">
        <div class="col-sm-12 banner">
          <h1>ALL HANDMADE</h1>
          <h4>View our art</h4>
          <button type="button" class = "btn btn-secondary" >Subscribe</button >
          <button type="button" class = "btn btn-secondary" >Shop now</button>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 shop">
            <h1>SHOP</h1>
            <p>All our products are handmade</p>
            <div id="product">
              <h3 id="name">Kindle Paperwhite Case Tartan</h3>
              <a href = "amazon.com">
                <div id="productImage">
                </div>
              </a>
              <h3 id="price">9,99$</h3>
              <button>Buy now</button>
            </div>
        </div>
      </div>
  </body>
  <script src="index.js"></script>
</html>