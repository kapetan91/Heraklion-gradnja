<?php
include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
<!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/about.css">
    <link rel="stylesheet" type="text/css" href="css/about.min.css">


</head>

	<body>

    <?php include "header.php"; ?>

   -->
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
  
       <?php include "footer.php"; ?>

	</body>
</html>