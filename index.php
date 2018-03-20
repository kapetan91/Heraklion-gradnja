<?php
include "config.php";
?>
<!DOCTYPE html>
<html>

<head>
  <?php include "head.php"; ?>
</head>

	<body>

	<?php include('header.php') ?>	

<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('images/header.jpg')">
            <div class="hero">        
        <hgroup>
            <h1><?php echo $lang['heraklion'] ?></h1>        
            <h3><?php echo $lang['location'] ?></h3>
        </hgroup>       
        <button class="btn btn-hero btn-lg" role="button"><a style="color:white"; href="contact.php"><?php echo $lang['contact us'] ?></a></button>
      </div>
    </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('images/header2.jpg')">
            <div class="hero">        
        <hgroup>
            <h1><?php echo $lang['heraklion'] ?></h1>        
            <h3><?php echo $lang['location'] ?></h3>
        </hgroup>       
        <button class="btn btn-hero btn-lg" role="button"><a style="color:white"; href="jobs.php"><?php echo $lang['our jobs'] ?></a></button>
          </div>
        </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('images/header3.jpg')">
            <div class="hero">        
        <hgroup>
            <h1><?php echo $lang['heraklion'] ?></h1>        
            <h3><?php echo $lang['location'] ?></h3>
        </hgroup>       
        <button class="btn btn-hero btn-lg" role="button"><a style="color:white"; href="about.php"><?php echo $lang['about us'] ?></a></button>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</header>

	<main role="main">
     
	<div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="images/6.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2><?php echo $lang['building'] ?></h2>
            <p>
            	<?php echo $lang['building1'] ?> </p>
            
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="images/5.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2><?php echo $lang['project'] ?></h2>
            <p><?php echo $lang['project1'] ?></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="images/heraklion2.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2><?php echo $lang['consulting'] ?> </h2>
            <p><?php echo $lang['consulting1'] ?></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading"><?php echo $lang['structure'] ?></h2>
            <p class="lead">
            	<?php echo $lang['structure1'] ?></p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="images/3.jpg" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading"><?php echo $lang['design'] ?></h2>
            <p class="lead">
            	<?php echo $lang['design1'] ?>
            </p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="images/1.jpg" alt="Generic placeholder image">
          </div>
        </div>

      </div><!-- /.container -->

      <hr class="featurette-divider">

      <!-- FOOTER -->
      <?php include('footer.php') ?>
      

    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="bootstrap-4.0.0/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="bootstrap-4.0.0/assets/js/vendor/popper.min.js"></script>
    <script src="bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="bootstrap-4.0.0/assets/js/vendor/holder.min.js"></script>
  </body>
</html>

