<?php
include "config.php";
?>
<!DOCTYPE html>
<html>
	<body>

	<header>
		    <?php include('header.php') ?>
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

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


      <!-- FOOTER -->
      <?php include('footer.php') ?>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
  </body>
</html>

	</body>
</html>