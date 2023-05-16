<?php
/*
  Templates render the content of your pages.

  They contain the markup together with some control structures
  like loops or if-statements. The `$page` variable always
  refers to the currently active page.

  To fetch the content from each field we call the field name as a
  method on the `$page` object, e.g. `$page->title()`.

  This home template renders content from others pages, the children of
  the `photography` page to display a nice gallery grid.

  Snippets like the header and footer contain markup used in
  multiple templates. They also help to keep templates clean.

  More about templates: https://getkirby.com/docs/guide/templates/basics
*/

?>
<?php layout() ?>
<?php snippet('intro') ?>
<?php
/*
  We always use an if-statement to check if a page exists to
  prevent errors in case the page was deleted or renamed before
  we call a method like `children()` in this case
*/
?>
<?php if (!$page->text()->isEmpty()): ?>
  <?= smartypants($page->text()->kirbytext()) ?>
<?php endif ?>

<details>
  <summary role="button" class="primary"><del>Batteries</del> <u>Reins and Saddle</u> included!</summary>
  <ul>
    <li>🐍 Uses Django’s built-in <a href="https://docs.djangoproject.com/en/stable/ref/django-admin/#cmdoption-startapp-template">django-admin --template option</a>.</li>
    <li>🫥 Sets up <a href="https://docs.djangoproject.com/en/stable/topics/auth/customizing/#auth-custom-user">a custom User model</a>.</li>
    <li>🎁 <a href="https://pypi.org/project/pip-tools/">pip-compile</a> for easy dependency management.</li>
    <li>📐 <a href="https://pre-commit.com">pre-commit</a> to keep your code clean and working properly.</li>
    <li>🫀 Sets you up to build <a href="https://developer.mozilla.org/en-US/docs/Glossary/Progressive_Enhancement">progressively-enhanced</a>, accessible websites and applications.</li>
  </ul>
</details>

<details>
  <summary role="button" class="primary">Free to try!</summary>
  <p>Only pay when you’re ready to launch your project! We want to make sure you get exactly what you need before money changes hands.</p>
</details>

<form action="https://buttondown.email/api/emails/embed-subscribe/blaze.horse" method="post">
  <label for="bd-email">Sign up to be notified when it’s ready to try!</label>
  <input type="email" name="email" id="bd-email" />
  <input type="submit" value="Subscribe" />
  <p><small><a href="https://buttondown.email/refer/blaze.horse" target="_blank">Powered by Buttondown.</a></small></p>
</form>

<p>You can also follow along <a rel="me" href="https://mastodon.social/@blazehorse">on Mastodon</a>.</p>
