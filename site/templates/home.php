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

<header class="h1">
  <div class="icon"><img src="<?= url('assets/icons/seahorse.svg') ?>" height="200" width="200" alt="Seahorse icon"></div>
  <h1>Blaze.horse — Django Starter&nbsp;Kit</h1>
  <h2><small>Get your next <a href="https://www.djangoproject.com/start/overview/">Django</a> project out the starting gate in a&nbsp;hurry!</small></h2>
  <div>
    <a href="https://codecov.io/gh/piepworks/blaze-starter"><img src="https://codecov.io/gh/piepworks/blaze-starter/branch/main/graph/badge.svg?token=5V3K1650SC" alt="Codecov test coverage badge"></a>
    <a href="https://github.com/piepworks/blaze-starter"><img src="https://img.shields.io/github/stars/piepworks/blaze-starter?style=social" alt="GitHub stars badge"></a>
    <a href="https://github.com/psf/black"><img src="https://img.shields.io/badge/code%20style-black-000000.svg" alt="Code style: black"></a>
    <a href="https://github.com/pre-commit/pre-commit"><img src="https://img.shields.io/badge/pre--commit-enabled-brightgreen?logo=pre-commit&logoColor=white" alt="pre-commit: enabled"></a>
    <a href="https://djangoproject.com"><img src="https://img.shields.io/badge/Django-4.2.x-blue?logo=django&logoColor=green" alt="Django version 4.2.x"></a>
    <a href="https://www.python.org"><img src="https://img.shields.io/badge/Python-3.11.x-blue?logo=python&logoColor=ffd440" alt="Python version 3.11.x"></a>
    <a href="https://litestream.io"><img src="https://img.shields.io/badge/SQLite-in_production-blue?logo=sqlite&logoColor=green" alt="SQLite: in production"></a>
    <a href="https://playwright.dev"><img src="https://img.shields.io/badge/Playwright-enabled-brightgreen?logo=playwright" alt="Playwright: enabled"></a>
  </div>
</header>

<p>Big tech thinks everyone needs to <a href="https://youtu.be/KrPsyr8Ig6M?t=841">build aircraft carriers</a>, but all you need is a horse.</p>
<p><b>TL;DR:</b> Try it out now (or <a href="https://asciinema.org/a/591894">watch a quick demo</a>):</p>

<pre>
  <code><b>/bin/bash</b> <i>-c</i> "<i>$(</i><b>curl</b> <i>-fsSL</i> <u>https://blaze.horse/starter/install</u><i>)</i>"</code>
</pre>

<p><small>(For more details, check out <a href="https://github.com/piepworks/blaze-starter#readme">the README</a>)</small></p>

<p>From the makers of <a href="https://cassettenest.com">Cassette Nest</a> and <a href="https://listsofbooks.com">Lists of Books</a>. We’ve distilled what we’ve learned, making all the little picky decisions so you don’t have to: just get to work on your project!</p>

<details>
  <summary role="button" class="contrast"><del>Batteries</del> <u>Reins and Saddle</u> included!</summary>
  <ul>
    <li>🐍 Uses Django’s built-in <a href="https://docs.djangoproject.com/en/stable/ref/django-admin/#cmdoption-startapp-template">django-admin --template option</a>.</li>
    <li>
      🫥 Sets up a custom User model.
      <ul>
        <li><a href="https://docs.djangoproject.com/en/stable/topics/auth/customizing/#using-a-custom-user-model-when-starting-a-project">“If you’re starting a new project, it’s highly recommended to set up a custom user model, even if the default User model is sufficient for you.”</a></li>
        <li>Email addresses are the usernames: the most sensible default!</li>
      </ul>
    </li>
    <li>🎁 <a href="https://pypi.org/project/pip-tools/">pip-compile</a> for easy dependency management.</li>
    <li>📐 <a href="https://pre-commit.com">pre-commit</a> to keep your code clean and working properly.</li>
    <li>🧪 <a href="https://pytest-django.readthedocs.io/en/latest/">pytest</a> for fast, easy-to-write tests.</li>
    <li>🎭 <a href="https://playwright.dev">Playwright</a> for robust browser testing, including visual regression tests!
    <li>🔷 <a href="https://litestream.io/">Litestream</a> for effortless SQLite support in “serverless” environments</li>
    <li>🫀 Sets you up to build <a href="https://developer.mozilla.org/en-US/docs/Glossary/Progressive_Enhancement">progressively-enhanced</a>, accessible websites and applications.</li>
  </ul>
</details>

<details>
  <summary role="button" class="contrast">Free for personal, non-commercial use! Free to try (for everyone)!</summary>
  <p>100% free for all personal, non-commercial use! Start a new website without one of those over-hyped static site generators! <i>You deserve tried and true, old school dynamic content!</i></p>
  <p>Only pay when you’re ready to launch your project! We want to make sure you get exactly what you need before money changes hands.</p>
  <p>At just <a href="https://hub.piep.works">$100 USD</a> (per-site, one time!) for a license, it’s a fantastic investment to jumpstart a new project!</p>
</details>

<form action="https://buttondown.email/api/emails/embed-subscribe/blaze.horse" method="post">
  <label for="bd-email">Sign up for the mailing list</label>
  <input type="email" name="email" id="bd-email" required>
  <button>Subscribe</button>
</form>

<p>You can also follow along <a rel="me" href="https://mastodon.social/@blazehorse">on Mastodon</a>.</p>
