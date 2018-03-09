<?php
include "config.php";
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" type="image/png" href="images/HG_logo_mark.jpg"/>
<title>Heraklion gradnja</title>

<link rel="stylesheet" href="css/styles.css">
</head>
<body class="contact">

    <?php include('header.php') ?>
     <div class="container">
        <main class="page-content">
            
            <div class="content-new-post">
                <div class="form-group">
                    <label class="form-label"><?php echo $lang['email'] ?></label>
                    <input type="text" class="form-input">
                </div>

                <div class="form-group">
                    <label class="form-label"><?php echo $lang['message'] ?></label>
                    <textarea rows="10" class="form-input"></textarea>
                </div>

                <div class="form-group">
                    <button type="button" class="btn btn-danger">Send</button>
                </div>
            </div>
        </main>

        <?php include('footer.php'); ?>

</body>
</html>