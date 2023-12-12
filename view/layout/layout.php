<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Framework POO</title>
  <link rel="stylesheet" type="text/css" href="<?= $view->asset('css/style.css'); ?>">
</head>

<body>


  <header>
    <?php include 'partials/nav.php' ?>
  </header>

  <div class="container">
    <?= $content; ?>
  </div>

  <footer>

  </footer>

  <script src="<?= $view->asset('js/main.js'); ?>"></script>
</body>

</html>