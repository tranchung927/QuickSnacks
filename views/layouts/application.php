<DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?= @$title ?: 'QuickSnacks' ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="public/css/style.css">

    <!-- File css -> file js -> file jquery -->
    <!-- Put script after jquery -->
    <link rel="stylesheet" href="public/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="public/fontawesome/css/all.css">
    <script type="text/javascript" src="public/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="public/script/script.js"></script>

    <!-- font used in this site -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="public/animate.css">
  </head>

  <body>
    <?php include "header.php"; ?>
    <div id="main_body">
      <?= @$content ?>
    </div>
    <?php include "footer.php"; ?>
  </body>

  </html>