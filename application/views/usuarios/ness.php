
<!DOCTYPE html>
<html lang="ja">
  <head>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('sources/css/nes.css')?>">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="NES.css is a NES-style CSS Framework." />
    <meta name="keywords" content="html5,css,framework,sass,NES,8bit" />
    <meta name="author" content="© 2018 B.C.Rikko" />
    <link rel="shortcut icon" href="https://bcrikko.github.io/NES.css/favicon.ico" />

    <title>NES.css - NES-style CSS Framework</title>

    <link href="./css/nes.css" rel="stylesheet" />
    <link href="./style.css" rel="stylesheet" />

    <meta property="og:type" content="website" />
    <meta property="og:title" content="NES.css" />
    <meta property="og:url" content="https://bcrikko.github.io/NES.css/" />
    <meta property="og:description" content="NES-style CSS Framework | ファミコン風CSSフレームワーク" />
    <meta property="og:image" content="https://user-images.githubusercontent.com/5305599/49061716-da649680-f254-11e8-9a89-d95a7407ec6a.png" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@bc_rikko" />
    <meta name="twitter:creator" content="@bc_rikko" />
    <meta name="twitter:image" content="https://user-images.githubusercontent.com/5305599/49061716-da649680-f254-11e8-9a89-d95a7407ec6a.png" />

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-41640153-4"></script>
    <script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag("js", new Date());gtag("config", "UA-41640153-4");</script>
  </head>

  <body>
    <header>
      <h1><i class="snes-jp-logo brand"></i>NES.css</h1>
      <p>NES-style CSS Framework.</p>
    </header>

    <a class="github-link" href="https://github.com/BcRikko/NES.css" target="_blank">
      <p class="balloon from-right">Fork me<br />on GitHub</p>
      <i class="octocat"></i>
    </a>

    <section class="container with-title">
      <h2 class="title">Buttons</h2>
      <div>
        <button type="button" class="btn">Normal</button>
        <button type="button" class="btn is-primary">Primary</button>
        <button type="button" class="btn is-success">Success</button>
        <button type="button" class="btn is-warning">Warning</button>
        <button type="button" class="btn is-error">Error</button>
      </div>
    </section>

    <section class="container with-title">
      <h2 class="title">Containers</h2>
      <div class="containers">
        <div class="container with-title is-center">
          <p class="title">Container.is-center</p>
          <p>Good morning. Thou hast had a good night's sleep, I hope.</p>
        </div>
        <div class="container is-dark with-title">
          <p class="title">Container.is-dark</p>
          <p style="color: white;">Good morning. Thou hast had a good night's sleep, I hope.</p>
        </div>
        <div class="container is-rounded">
          <p>Good morning. Thou hast had a good night's sleep, I hope.</p>
        </div>
        <div class="container is-rounded is-dark">
          <p style="color: white;">Good morning. Thou hast had a good night's sleep, I hope.</p>
        </div>
      </div>
    </section>

    <section class="container with-title">
      <h2 class="title">Radios</h2>
      <div>
        <label>
          <input type="radio" class="radio" name="answer" checked />
          <span>Yes</span>
        </label>
        <label>
          <input type="radio" class="radio" name="answer" />
          <span>No</span>
        </label>
      </div>
    </section>

    <section class="container with-title">
      <h2 class="title">Checkboxes</h2>
      <label>
        <input type="checkbox" class="checkbox" checked />
        <span>Enable</span>
      </label>
    </section>

    <section class="form container with-title">
      <h2 class="title">Form</h2>
      <div class="field">
        <label for="name_field">Your name</label>
        <input type="text" id="name_field" class="input">
      </div>
      <div class="field is-inline">
        <label for="inline_field">.input.is-success</label>
        <input type="text" id="inline_field" class="input is-success" placeholder="NES.css">
      </div>
      <div class="field is-inline">
        <label for="warning_field">.input.is-warning</label>
        <input type="text" id="warning_field" class="input is-warning" placeholder="8bit.css">
      </div>
      <div class="field is-inline">
        <label for="error_field">.input.is-error</label>
        <input type="text" id="error_field" class="input is-error" placeholder="awesome.css">
      </div>
    </section>

    <section class="balloon container with-title">
      <h2 class="title">Balloons</h2>
      <div class="messages">
        <div class="message -left">
          <i class="bcrikko"></i>
          <div class="balloon from-left">
            <p>Hello NES.css</p>
          </div>
        </div>
        <div class="message -right">
          <div class="balloon from-right">
            <p>Good morning. Thou hast had a good night's sleep, I hope.</p>
          </div>
          <i class="bcrikko"></i>
        </div>
      </div>
    </section>

    <section class="container with-title">
      <h2 class="title">Table</h2>
      <table class="table is-bordered is-centered" style="margin:15px 4px 5px 4px">
        <thead>
          <tr>
            <th>Table</th>
            <th>Table.is-bordered</th>
            <th>Table.is-centered</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Thou hast had a good morning</td>
            <td>Thou hast had a good afternoon</td>
            <td>Thou hast had a good night</td>
          </tr>
          <tr>
            <td>Thou hast had a good morning</td>
            <td>Thou hast had a good afternoon</td>
            <td>Thou hast had a good night</td>
          </tr>
        </tbody>
      </table>
    </section>

    <section class="container with-title">
      <h2 class="title">Icons</h2>
      <section class="container with-title">
        <h3 class="title">Reaction</h3>
        <div>
          <i class="icon heart"></i>
          <i class="icon heart is-medium"></i>
          <i class="icon heart is-large"></i>
          <i class="icon heart is-empty"></i>

          <i class="icon star"></i>
          <i class="icon star is-medium"></i>
          <i class="icon star is-large"></i>
          <i class="icon star is-empty"></i>

          <i class="icon like"></i>
          <i class="icon like is-medium"></i>
          <i class="icon like is-large"></i>
          <i class="icon like is-empty"></i>
        </div>
      </section>
      <section class="container with-title">
        <h3 class="title">SNS</h3>
        <div>
          <i class="icon twitter"></i>
          <i class="icon twitter is-medium"></i>
          <i class="icon twitter is-large"></i>

          <i class="icon facebook"></i>
          <i class="icon facebook is-medium"></i>
          <i class="icon facebook is-large"></i>

          <i class="icon github"></i>
          <i class="icon github is-medium"></i>
          <i class="icon github is-large"></i>

          <i class="icon youtube"></i>
          <i class="icon youtube is-medium"></i>
          <i class="icon youtube is-large"></i>
        </div>
      </section>

      <section class="container with-title">
        <h3 class="title">Others</h3>
        <div>
          <i class="icon close"></i>
          <i class="icon close is-medium"></i>
          <i class="icon close is-large"></i>

          <i class="octocat animate"></i>

          <i class="icon trophy"></i>
          <i class="icon trophy is-medium"></i>
          <i class="icon trophy is-large"></i>
        </div>
      </section>

      <section class="container with-title">
        <h3 class="title">Controllers</h3>
        <div>
          <i class="nes-logo"></i>
          <i class="nes-jp-logo"></i>
          <i class="snes-logo"></i>
          <i class="snes-jp-logo"></i>
        </div>
      </section>
    </section>


    <footer class="footer">
      <p>
        <a href="https://kuroeveryday.blogspot.com/" target="_blank">Black Everyday Company</a>
        <span>-</span>
        <a href="https://twitter.com/bc_rikko" target="_blank">@bc_rikko</a>
      </p>
    </footer>
  </body>
  <script>
    var link = document.querySelector("a.github-link");
    var octocat = document.querySelector("a.github-link > i.octocat");
    link.addEventListener("mouseover", function() {
      octocat.classList.add("animate");
    });
    link.addEventListener("mouseout", function() {
      octocat.classList.remove("animate");
    });
  </script>
</html>
