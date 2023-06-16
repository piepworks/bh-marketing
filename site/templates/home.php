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
  <h1>Blaze.horse — Django Starter Kit</h1>
  <h2><small>Get your next <a href="https://www.djangoproject.com/start/overview/">Django</a> project out the starting gate in a hurry!</small></h2>
</header>

<p>Big tech thinks everyone needs to <a href="https://youtu.be/KrPsyr8Ig6M?t=841">build aircraft carriers</a>, but all you need is a horse.</p>
<p><b>TL;DR:</b> Try it out now:</p>

<pre><code class="language-bash" data-lang="bash">/bin/bash -c "$(curl -fsSL https://blaze.horse/django-starter/install)"</code></pre>

<p><small>(For more details, check out <a href="https://github.com/piepworks/django-starter#readme">the README</a>)</small></p>

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
    <li>🫀 Sets you up to build <a href="https://developer.mozilla.org/en-US/docs/Glossary/Progressive_Enhancement">progressively-enhanced</a>, accessible websites and applications.</li>
  </ul>
</details>

<details>
  <summary role="button" class="contrast">Free to try!</summary>
  <p>Only pay when you’re ready to launch your project! We want to make sure you get exactly what you need before money changes hands.</p>
  <p>Our introductory pricing is $100 USD per licensed domain. A bargain for all the time savings!</p>
</details>

<form action="https://buttondown.email/api/emails/embed-subscribe/blaze.horse" method="post">
  <label for="bd-email">Sign up for the mailing list</label>
  <input type="email" name="email" id="bd-email" required>
  <button>Subscribe</button>
</form>

<p>You can also follow along <a rel="me" href="https://mastodon.social/@blazehorse">on Mastodon</a>.</p>
