 <header class="header">

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#"><?php echo $lang['heraklion'] ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link active" href="index.php"><?php echo $lang['home'] ?></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="about.php"><?php echo $lang['about'] ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php"><?php echo $lang['contact'] ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="jobs.php"><?php echo $lang['jobs'] ?></a>
          </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <a title="English" class="languageT" href="?lang=en"><img src="images/english.png" width="30px" height="17px"><?php echo $lang['lang_en'] ?></a>
        <a title="Serbian" class="languageT" href="?lang=sr"><img src="images/serbian.jpg" width="30px" height="17px"><?php echo $lang['lang_sr'] ?></a>
        </form>
      </div>
    </nav>
  </header>

