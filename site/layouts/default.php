<?php
/*
  Snippets are a great way to store code snippets for reuse
  or to keep your templates clean.

  This header snippet is reused in all templates.
  It fetches information from the `site.txt` content file
  and contains the site navigation.

  More about snippets:
  https://getkirby.com/docs/guide/templates/snippets
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?= $page->title()->esc() ?></title>

  <?php
  /*
    Stylesheets can be included using the `css()` helper.
    Kirby also provides the `js()` helper to include script file.
    More Kirby helpers: https://getkirby.com/docs/reference/templates/helpers
  */
  ?>
  <?= css([
    // 'assets/css/prism.css',
    // 'assets/css/lightbox.css',
    // 'assets/css/index.css',
    'assets/css/vendor/pico.min.css',
    // https://getkirby.com/docs/reference/templates/helpers/css#example__autoloading-template-specific-css-files
    '@auto'
  ]) ?>

  <link rel="shortcut icon" type="image/x-icon" href="<?= url('favicon.ico') ?>">
  <script defer data-domain="blaze.horse" src="https://plausible.io/js/script.js"></script>
</head>
<body>

  <main class="container">

  <?= $slot ?>

  </main>

  <footer class="container">
    <small>&copy; 2023 <a href="https://piep.works"> Piepworks LLC</a>. All rights reserved.</small>

    <div>
      <small>
        <a href="/policies/privacy">Privacy Policy</a>&nbsp;&nbsp;
        <a href="/policies/terms">Terms</a>&nbsp;&nbsp;
        <a href="/policies/abuse">Use Restrictions</a><br>
        <a href="/policies/eula">End User License Agreement / Refund Policy</a>
      </small>
    </div>
  </footer>

  <?= js([
    // 'assets/js/prism.js',
    // 'assets/js/lightbox.js',
    // 'assets/js/index.js',
    '@auto'
  ]) ?>

</body>
</html>
