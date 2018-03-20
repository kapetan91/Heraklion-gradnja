<?php
include "config.php";
include "mail/contact_me.php";
?>
<!DOCTYPE html>
<html>

<head>
  <?php include "head.php"; ?>
</head>

<body>

    <?php include('header.php') ?>

     <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase"><?php echo $lang['contact us'] ?></h2>
            <h3 class="section-subheading text-muted"><?php echo $lang['heraklion'] ?></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                </div>
              </div>
              <div class="info">
              <div class="row">
          <div class="col-lg-12 text-center">
            <h4 class="section-heading"><?php echo $lang['address'] ?></h4>
            <h5 class="section-heading text-lowercase"><?php echo $lang['number'] ?></h5>
            <h6 class="section-heading text-lowercase"><?php echo $lang['email'] ?></h6>
          </div>
        </div>
    </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <?php include "footer.php"; ?>
    
        <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="bootstrap-4.0.0/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="bootstrap-4.0.0/assets/js/vendor/popper.min.js"></script>
    <script src="bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/active.js"></script> 
    <script src="js/contact_me.js"></script>
    <script src="js/contact_me.min.js"></script>
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/jqBootstrapValidation.min.js"></script>
</body>
</html>