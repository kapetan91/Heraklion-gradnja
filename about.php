<?php
include "config.php";
?>
<!DOCTYPE html>
<html>

<head>
  <?php include "head.php"; ?>
</head>

<body>

    <?php include "header.php"; ?>

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase"><?php echo $lang['about us'] ?></h2>
            <h3 class="section-subheading text-muted"><?php echo $lang['heraklion'] ?></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="images/grb.png" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="subheading"><?php echo $lang['heraklion'] ?></h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted"><?php echo $lang['heraklion-about'] ?></p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="images/gazda.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="subheading"><?php echo $lang['nenad'] ?></h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted"><?php echo $lang['nenad-about'] ?></p>
                  </div>
                </div>
              </li>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    
      <hr class="featurette-divider">

       <?php include "footer.php"; ?>

           <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="bootstrap-4.0.0/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="bootstrap-4.0.0/assets/js/vendor/popper.min.js"></script>
    <script src="bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/active.js"></script> 

	</body>
</html>