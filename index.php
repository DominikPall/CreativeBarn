<?php 
  include 'includes/autoLoader.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Creative Barn Shop</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="index.css">
      </head>
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
            <li class = "active"><a href="#">Home</a></li>
            <li><a href="#">ABOUT</a></li>
            <li><a href="#">SHOP</a></li>
            <li><a href="#">BLOG</a></li>
          </ul>
        </div>
      </nav>

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