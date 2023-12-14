<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MVC Framework</title>
  <link rel="stylesheet" type="text/css" href="<?= $view->asset('css/style.css'); ?>">
</head>

<body class="padding-l">

  <header>
    <?php include 'partials/nav.php' ?>
  </header>

  <main class="margin-top-l">
    <?= $content; ?>
  </main>

  <footer class="display-flex justify-content-center margin-y-xl">
    <p>MVC Framework - 2023</p>
  </footer>

  <script src="<?= $view->asset('js/main.js'); ?>"></script>
</body>

</html>