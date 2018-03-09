<?php
include "config.php";
?>
<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>

<body>
  <?php include "header.php"; ?>
 <div class="container">
     
 
 
<div class="container gallery-container">
  
    <h1 class="text-center">Bootstrap 3 Gallery</h1>
  
    <p class="page-description text-center">Grid Layout With Zoom Effect</p>
      
    <div class="tz-gallery">
  
        <div class="row mb-3">
            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="images/park.jpg">
                    <img src="images/park.jpg" alt="Park" class="card-img-top">
                    </a>
                </div>
            </div>
             
            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="images/benches.jpg">
                    <img src="images/benches.jpg" alt="Park" class="card-img-top">
                    </a>
                </div>
            </div>
             
            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="images/bridge.jpg">
                    <img src="images/bridge.jpg" alt="Park" class="card-img-top">
                    </a>
                </div>
            </div>
        </div>
          <div class="row"> 
            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="images/coast.jpg">
                    <img src="images/coast.jpg" alt="Park" class="card-img-top">
                    </a>
                </div>
            </div>
             
            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="images/rails.jpg">
                    <img src="images/rails.jpg" alt="Park" class="card-img-top">
                    </a>
                </div>
            </div>
             
            <div class="col-md-4">
                <div class="card">
                    <a class="lightbox" href="images/rocks.jpg">
                    <img src="images/rocks.jpg" alt="Park" class="card-img-top">
                    </a>
                </div>
            </div>
         
        </div>
  
    </div>
  
</div>
 
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</body>
</html>