
<!DOCTYPE html>
<html>
  <head>
    <title>Cirrus</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="description" content="A responsive and lightweight CSS framework.">
    <meta charset="UTF-8">

       <link rel="stylesheet" type="text/css" href="<?php echo base_url('sources/css2/cirrus.css')?>">
           <link rel="stylesheet" type="text/css" href="<?php echo base_url('sources/css2/app.css')?>">

       <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
        <!-- Syntax highlight code -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('sources/css2/cirrus.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('sources/css2/nose.css')?>">
    <script type="text/javascript" src="<?php echo base_url();?>sources/js/jquery-3.1.1.min.js"></script>
  </head>

  <body>
        <div id="header" class="header unselectable header-fixed fill-height header-dark">
            <div class="header-brand">
                <div class="nav-item">
                    <a href="#landing" class="smoothScroll">
                        <h6 class="title">Cirrus</h6>
                    </a>
                </div>
                <div class="nav-item nav-btn" id="header-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="header-nav" id="header-menu">
                <div class="nav-left text-center">
                    <div class="nav-item">
                        <a href="https://github.com/Spiderpig86/Cirrus">
                        <span class="icon">
                        <i class="fa fa-github"></i>
                        </span>
                        </a>
                    </div>
                    <div class="nav-item">
                        <a href="#">
                        <span class="icon white">
                        <i class="fa fa-twitter"></i>
                        </span>
                        </a>
                    </div>
                </div>
                <div class="nav-right text-center">
                    <div class="nav-item">
                        <a href="#why" class="smoothScroll"><span class="icon"><i class="fa fa-question" aria-hidden="true"></i></span>Why Cirrus?</a>
                    </div>
                    <div class="nav-item has-sub" id="dropdown">
                        <a class="nav-dropdown-link"><span class="icon"><i class="fa fa-book" aria-hidden="true"></i></span> Docs</a>
                        <ul class="dropdown-menu dropdown-animated dropdown-dark" role="menu">
                            <li role="menu-item"><a href="#animations" class="smoothScroll">Animations</a></li>
                            <li role="menu-item"><a href="#buttons" class="smoothScroll">Buttons</a></li>
                            <li role="menu-item"><a href="#components" class="smoothScroll">Components</a></li>
                            <li role="menu-item"><a href="#code" class="smoothScroll">Code</a></li>
                            <li role="menu-item"><a href="#font" class="smoothScroll">Font</a></li>
                            <li role="menu-item"><a href="#footer" class="smoothScroll">Footer</a></li>
                            <li role="menu-item"><a href="#forms" class="smoothScroll">Forms</a></li>
                            <li role="menu-item"><a href="#head" class="smoothScroll">Header</a></li>
                            <li role="menu-item"><a href="#layout" class="smoothScroll">Layout</a></li>
                            <li role="menu-item"><a href="#links" class="smoothScroll">Links</a></li>
                            <li role="menu-item"><a href="#lists" class="smoothScroll">Lists</a></li>
                            <li role="menu-item"><a href="#table" class="smoothScroll">Tables</a></li>
                            <li role="menu-item"><a href="#utils" class="smoothScroll">Utils</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <section id="landing" class="hero fullscreen">
            <video preload="auto" autoplay="" loop="" class="fillWidth fadeIn video-fullscreen this-overlay" poster="<?php echo base_url('sources/fonts/Imagen1.png')?>">
            <source src="https://s3-us-west-2.amazonaws.com/coverr/mp4/Sky-High.mp4" type="video/mp4">Your browser does not support the video tag. I suggest you upgrade your browser.
            <source src="https://s3-us-west-2.amazonaws.com/coverr/webm/Sky-High.webm" type="video/webm">Your browser does not support the video tag. I suggest you upgrade your browser.
            </video>
            <div class="hero-body">
                <div class="content text-center">
                    <!-- <img id="logo" src="http://i.imgur.com/jpowijz.png" alt="logo"/> -->
                    <img id="logo" src="<?php echo base_url('sources/fonts/CirrusLogo.png')?>" alt="logo"/>
                    <h1 class="white light title">Cirrus</h1>
                    <h6 class="white light">The CSS framework for the modern web.</h6>
                    <p id="version" class="white card text-center">0.5.4</p>
                    <a href="#started" class="smoothScroll"><button class="btn-outline center btn-animated">Getting Started</button>
                    </a>
                </div>
            </div>
        </section>

        <section class="hero accent" id="why">
            <div class="hero-body">
                <div class="content divided">
                     <div class="row text-center">
                <h3 class="white">Why Cirrus?</h3>
            </div>
                    <div class="row fluid-container text-center">
                        <div class="col-fluid">
                            <div class="content">
                                <div class="level center">
                                <span><h3 class="white">11</h3></span><span class="title">KB</span></div>
                                <p class="uppercase font-bold no-margin">Gzipped</p>
                                <p class="title no-margin">Lightweight</p>
                                <p class="subtitle no-margin">A powerful framework at a fraction of the cost.</p>
                            </div>
                    </div>
                    <div class="col-fluid">
                        <div class="content">
                        <span class="icon">
                            <i class="fa fa-mobile x-large" aria-hidden="true"></i>
                        </span>
                        <span class="icon">
                            <i class="fa fa-tablet x-large" aria-hidden="true"></i>
                        </span>
                        <p class="title">Responsive</p>
                        <p class="subtitle">Easily design you website without having to worry about different screen sizes.</p>
                        </div>
                    </div>
                    <div class="col-fluid">
                        <div class="content">
                         <span class="icon">
                            <i class="fa fa-puzzle-piece x-large" aria-hidden="true"></i>
                        </span>
                        <p class="title">Flexible</p>
                        <p class="subtitle">Don't need the whole framework? Just pick the files you need from our repository.</p>
                        </div>
                    </div>
                    <div class="col-fluid">
                        <div class="content">
                        <span class="icon">
                            <i class="fa fa-rocket x-large" aria-hidden="true"></i>
                        </span>
                        <p class="title">Modern</p>
                        <p class="subtitle">Cirrus was designed to work across all modern browsers with <strong>Flexbox</strong>.</p>
                    </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="started" class="padtop">
            <div class="content">
                <h3>Getting Started</h3>
                <div class="divider"></div>
                <div class="row">
                    <p>Getting started with Cirrus is very simple. There will be more options on getting Cirrus in the future, but for now you can simply download the zip file from the Github repo.</p>
                </div>

                <div class="row">
                    <a class="this-inline-block" href="https://github.com/Spiderpig86/Cirrus/releases"><button class="btn-accent">Download Cirrus</button></a>
                </div>

                <div class="row">
                    <h6 class="title">Install with NPM</h6>
                    <p>You can use NPM to install Cirrus.</p>
                    <pre class="get-cirrus"><code class="dark">$ npm install cirrus-ui --save</code><div id="yarnCopy" class="copy" data-clipboard-text="npm install cirrus-ui --save">Copy</div></pre>
                </div>

                <div class="row">
                    <h6 class="title">Install with Yarn</h6>
                    <p>You can use Yarn to install Cirrus.</p>
                    <pre class="get-cirrus"><code class="dark">$ yarn add cirrus-ui</code><div id="yarnCopy" class="copy" data-clipboard-text="yarn add cirrus-ui">Copy</div></pre>
                </div>

                <div class="row">
                    <h6 class="title">CDN with unpkg</h6>
                    <pre class="get-cirrus"><code class="dark">https://unpkg.com/cirrus-ui</code><div id="yarnCopy" class="copy" data-clipboard-text="https://unpkg.com/cirrus-ui">Copy</div></pre>
                </div>

                <div class="row">
                    <h6 class="title">CDN with JsDelivr</h6>
                    <pre class="get-cirrus"><code class="dark">https://cdn.jsdelivr.net/npm/cirrus-ui@0.5.4/dist/cirrus.min.css</code><div id="yarnCopy" class="copy" data-clipboard-text="https://cdn.jsdelivr.net/npm/cirrus-ui@0.5.4/dist/cirrus.min.css">Copy</div></pre>
                </div>

                <div class="row">
                    <h6 class="title">Structure</h6>
                    <p>The file tree for the install looks like this:</p>

                    <pre><code class="js">├───dist                    // Dist files (git ignored)
│   ├───cirrus.css
│   └───cirrus.min.css
├───demo_res                // Docs resources
│   └─── ...
├───docs                    // Documentation
│   ├───demo.html
│   └─── ...
├───src                     // CSS source files
│   ├───animations.css
│   ├───button.css
│   ├───card.css
│   ├───code.css
│   ├───default.css
│   ├───font.css
│   ├───footer.css
│   ├───forms.css
│   ├───frames.css
│   ├───header.css
│   ├───layout.css
│   ├───links.css
│   ├───lists.css
│   ├───media.css
│   ├───modal.css
│   ├───placeholder.css
│   ├───table.css
│   ├───toast.css
│   └───util.css
├───README.md
└───index.html</code> </pre>
                </div>

                <div class="row">
                    <h6 class="title">Setting Up</h6>
                    <p>Setting up Cirrus for any project is very simple and will only require a couple of lines on each file.</p>

                    <pre><code class="html" data-lang="HTML">&lt;!-- Google Fonts --&gt;
&lt;link href=&quot;https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700&quot; rel=&quot;stylesheet&quot;&gt;
&lt;link href=&quot;https://fonts.googleapis.com/css?family=Montserrat:400,700&quot; rel=&quot;stylesheet&quot;&gt;

&lt;!-- Minified Cirrus CSS --&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;../css/cirrus.min.css&quot;&gt;

&lt;!-- Import your other dependencies --&gt;</code></pre>
                </div>

                <space></space>
                <div class="row">
                    <h6>Customize Your Build</h6>
                    <p>Cirrus can be modified to include only components that you will need. Since it is processed with <a href="http://gulpjs.com/">Gulp</a> swapping different components in and out of your distribution build is very simple.</p>
                    <p>Just follow the following steps:</p>
                    <ol>
                        <li>Open the root directory in your terminal.</li>
                        <li>Remember to run <code>npm install</code> to get all the necessary dependencies.</li>
                        <li>Modify <code>gulpfile.js</code> to add or remove components and then run <code>gulp minify</code> to build the regular and minified versions.</li>
                        <li>These build files should appear in the <code>/dist</code> directory.</li>
                    </ol>
                    <p><b>Gulp Commands</b></p>
                    <ul>
                        <li><code>gulp compile</code> - just compile the CSS without minification.</li>
                        <li><code>gulp minify</code> - compile the CSS with <a href="https://github.com/jakubpawlowicz/clean-css#level-2-optimizations">level 2 minification</a>.</li>
                        <li><code>gulp watch</code> - automate compiling and minication.</li>
                    </ul>
                </div>

                <div class="row">
                    <h6>Template</h6>
                    <p>Start developing <b>now</b> with this starter template.</p>
                    <pre>
                        <code class="html" data-lang="HTML">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
            &lt;title&gt;Getting Started with Cirrus&lt;/title&gt;

            &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0&quot;&gt;
            &lt;meta charset=&quot;UTF-8&quot;&gt;
            &lt;meta http-equiv=&quot;X-UA-Compatible&quot; content=&quot;IE=edge;&quot; /&gt;
        
            &lt;link href=&quot;https://unpkg.com/cirrus-ui&quot; type=&quot;text/css&quot; rel=&quot;stylesheet&quot; /&gt;
        
            &lt;link href=&quot;https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700&quot; rel=&quot;stylesheet&quot;&gt;
            &lt;link href=&quot;https://fonts.googleapis.com/css?family=Montserrat:400,700&quot; rel=&quot;stylesheet&quot;&gt;
            &lt;script src=&quot;https://code.jquery.com/jquery-2.2.4.min.js&quot; integrity=&quot;sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=&quot; crossorigin=&quot;anonymous&quot;&gt;&lt;/script&gt;
    &lt;/head&gt;

    &lt;body&gt;
        &lt;div class&quot;content&quot;&gt;
            &lt;div class=&quot;row text-center&quot;&gt;
                &lt;h1 class=&quot;title&quot;&gt;My First Page&lt;/h1&gt;
                &lt;h6 class=&quot;light subtitle&quot;&gt;A webpage powered by &lt;b&gt;Cirrus&lt;/b&gt;&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;</code>
                    </pre>
                </div>

        </section>

        <section id="animations" class="padtop">
            <div class="content">
                <h3>Animations</h3>
                <div class="divider"></div>
                <div class="row">
                    <p>Cirrus introduces some animations to help you get started with your project from hover effects to loading indicators. All of these components can easily be modified to achieve any appearance.</p>
                    <space></space>
                    <h5>Loading Button</h5>
                    <p>These buttons are designed to tell users that a function is in progress.</p>
            <div class="row fluid-container">
                    <div class="col-fluid">
                        <button class="animated loading center hide-text">1</button>
                    </div>
                    <div class="col-fluid">
                        <button class="animated loading center loading-left btn-accent">Loading</button>
                    </div>
                    <div class="col-fluid">
                        <button class="animated loading center loading-white hide-text" id="btn3">3</button>
                    </div>
                    <div class="col-fluid">
                        <button class="animated loading center loading-right loading-white white" id="btn4">Loading</button>
                    </div>
                    <div class="col-fluid">
                        <button class="animated loading center hide-text" id="btn5">5</button>
                    </div>
                </div>

                <space></space>

                    <div class="row">
                        <pre><code class="html" data-lang="HTML">&lt;div class=&quot;col-fluid&quot;&gt;
    &lt;button class=&quot;animated loading center hide-text&quot;&gt;1&lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;col-fluid&quot;&gt;
    &lt;button class=&quot;animated loading center loading-left btn-accent&quot;&gt;Loading&lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;col-fluid&quot;&gt;
    &lt;button class=&quot;animated loading center loading-white hide-text&quot; id=&quot;btn3&quot;&gt;3&lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;col-fluid&quot;&gt;
    &lt;button class=&quot;animated loading center loading-right loading-white white&quot; id=&quot;btn4&quot;&gt;Loading&lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;col-fluid&quot;&gt;
    &lt;button class=&quot;animated loading center hide-text&quot; id=&quot;btn5&quot;&gt;5&lt;/button&gt;
&lt;/div&gt;</code></pre>
                    </div>

                    <space class="x-large"></space>

                <div class="row">
                    <h5>Hover Grow</h5>
                    <p>Zoom in various elements to make the stand out from the rest.</p>

                    <div class="row fluid-container text-center content" id="grid">
                        <a href="#">
                            <div class="content">
                                <img src="demo_res/img/FileBot.png" class="hover-grow"/>
                                <p>FileBot</p>
                            </div>
                        </a>
                         <a href="#">
                            <div class="content">
                                <img src="demo_res/img/Illustrator.png" class="hover-grow"/>
                                <p>Illustrator</p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="content">
                                <img src="demo_res/img/KeepassX.png" class="hover-grow"/>
                                <p>KeepassX</p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="content">
                                <img src="demo_res/img/Pandora2.png" class="hover-grow"/>
                                <p>Pandora</p>
                            </div>
                        </a>
                    </div>

                     <div class="row fluid-container text-center content" id="grid">
                        <a href="#">
                            <div class="content">
                                <img src="demo_res/img/photoshop.png" class="hover-grow"/>
                                <p>Photoshop</p>
                            </div>
                        </a>
                         <a href="#">
                            <div class="content">
                                <img src="demo_res/img/PhpStorm.png" class="hover-grow"/>
                                <p>PhpStorm</p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="content">
                                <img src="demo_res/img/Python.png" class="hover-grow"/>
                                <p>Python</p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="content">
                                <img src="demo_res/img/Wing.png" class="hover-grow"/>
                                <p>Wing</p>
                            </div>
                        </a>
                    </div>

                    <div class="row">
                        <pre><code class="html" data-lang="HTML">&lt;div class=&quot;content&quot;&gt;
    &lt;img src=&quot;demo_res/img/autodesk_autocad.png&quot; class=&quot;hover-grow&quot;/&gt;
    &lt;p&gt;Autodesk&lt;/p&gt;
&lt;/div&gt; </code></pre>
                    </div>
                </div>
                <space></space>
                <a href="docs/animations"><button class="pull-right">See More<i class="fa fa-chevron-right pad-left"></i></button></a>
            </div>
        </section>

        <section id="buttons" class="padtop">
            <div class="content">
                <h3>Buttons</h3>
                <div class="divider"></div>
                  <p>With Cirrus, buttons can easily be customized to different color schemes and different declarations can be used to construct them.</p>
                  <space class="large"></space>

                  <h6>Buttons with default styling.</h6>
                  <div class="row fluid-container level">
                    <div class="col-fluid">
                        <div class="row">
                            <div class="btn">test</div>
                        </div>
                        <div class="row">
                            <button>Regular Button</button>
                        </div>
                        <div class="row">
                            <input type="submit" value="Submit"/>
                        </div>
                    </div>
                    <div class="col-fluid">
                        <pre><code class="html" data-lang="HTML">&lt;div class=&quot;btn&quot;&gt;test&lt;/div&gt
&lt;button&gt;Regular Button&lt;/button&gt;
&lt;input type=&quot;submit&quot;/&gt;</code></pre>
                    </div>
                </div>

                <space></space>
                <a href="docs/buttons"><button class="pull-right">See More<i class="fa fa-chevron-right pad-left"></i></button></a>
        </section>

    <section id="components" class="padtop"><div class="content">
            <h3>Components</h3>
            <div class="divider"></div>
            <p>Cirrus provides a ton of beautifully designed components for any webpage or app. Use cards, one of Cirrus' most popular components to elegantly display information as shown below.</p>
            <div class="row fluid-container">
                <!-- 3 cards per row -->
                <div class="col-4">
                    <div class="card">
                        <div class="card-container">
                            <div class="card-image" style="background-image: url(https://placeimg.com/640/480/nature)"></div>

                            <div class="title-container">
                                <p class="title">Kangaroo Valley Safari</p><span class="subtitle">By John Doe</span>
                            </div>
                        </div>
                        <div class="content">
                            <p>Located two hours south of Sydney in the Southern Highland of New South Wales...</p>
                        </div>
                        <div class="action-bar text-center">
                            <button class="btn">SHARE</button>
                            <button class="btn">LEARN MORE</button>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card">
                        <div class="card-container">
                            <div class="card-image" style="background-image: url(https://source.unsplash.com/random/640x480)">
                            </div>

                            <div class="title-container">
                                <p class="title">Kangaroo Valley Safari</p><span class="subtitle">By John Doe</span>
                            </div>
                        </div>
                        <div class="content">
                            <p>Located two hours south of Sydney in the Southern Highland of New South Wales...</p>
                        </div>
                        <div class="action-bar text-center">
                            <button class="btn">SHARE</button>
                            <button class="btn">LEARN MORE</button>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card">
                        <div class="card-container">
                            <div class="card-image" style="background-image: url(https://source.unsplash.com/category/nature/640x480)"></div>
                            <div class="title-container">
                                <p class="title">Kangaroo Valley Safari</p><span class="subtitle">By John Doe</span>
                            </div>
                        </div>
                        <div class="content">
                            <p>Located two hours south of Sydney in the Southern Highland of New South Wales...</p>
                        </div>
                        <div class="action-bar text-center">
                            <button class="btn">SHARE</button>
                            <button class="btn">LEARN MORE</button>
                        </div>
                    </div>
                </div>
            </div>

            <p class="text-center">Another card design with the same CSS, different structure.</p>

            <div class="row fluid-container">
                <!-- 3 cards per row -->
                <div class="col-4">
                    <div class="card slide-up">
                        <div class="card-container">
                            <div class="card-image" style="background-image: url(https://unsplash.it/640/480?random&blur)"></div>
                        </div>
                        <div class="mobile-title">
                            <div class="content">
                                <div class="tile">
                                    <div class="tile-container">
                                        <p class="tile-title">Kangaroo Valley Safari</p>
                                        <p class="tile-subtitle">By John Doe</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body content">
                            <p>Located two hours south of Sydney in the Southern Highland of New South Wales...</p>
                        </div>
                        <div class="card-footer content">
                            2 min. read 22 comments
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card slide-up">
                        <div class="card-container">
                            <div class="card-image" style="background-image: url(https://unsplash.it/g/640/480?random)"></div>
                        </div>
                        <div class="mobile-title">
                            <div class="content">
                                <div class="tile tile-center">
                                    <div class="tile-icon">
                                        <figure class="avatar">
                                            <img src="http://orig04.deviantart.net/aded/f/2013/066/c/2/profile_picture_by_naivety_stock-d5x8lbn.jpg" alt="Person">
                                        </figure>
                                    </div>
                                    
                                    <div class="tile-container">
                                        <p class="tile-title">Kangaroo Valley Safari</p>
                                        <p class="tile-subtitle">By John Doe</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body content">
                            <p>Located two hours south of Sydney in the Southern Highland of New South Wales...</p>
                        </div>
                        <div class="card-footer content">
                            2 min. read 22 comments
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card slide-up">
                        <div class="card-container">
                            <div class="card-image" style="background-image: url(https://source.unsplash.com/user/erondu/640x480)"></div>
                        </div>
                        <div class="mobile-title">
                            <div class="content">
                                <div class="tile">
                                    <div class="tile-container">
                                        <p class="tile-title">Kangaroo Valley Safari</p>
                                        <p class="tile-subtitle">By John Doe</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body content">
                            <p>Located two hours south of Sydney in the Southern Highland of New South Wales...</p>
                        </div>
                        <div class="card-footer content">
                            03:45 - 1 Jan 2017
                        </div>
                    </div>
                </div>
            </div>
            <a href="docs/components"><div class="btn-container"><button class="pull-right">See More<i class="fa fa-chevron-right pad-left"></i></button></div></a>
        </div>
    </section>


        <section id="code" class="padtop">
            <div class="content">
                <h3>Code</h3>
                <div class="divider"></div>
            <div class="row">
                <div class="col-6">
                    <h6>Embedding Code</h6>
                    <p>It's as simple as pre > code > and then the code you want to mark up.</p>
                </div>
                <div class="col-6">
                    <pre>
            <code class="html" data-lang="HTML">&lt;ul&gt;
    &lt;li&gt;Item 1&lt;/li&gt;
    &lt;li&gt;Item 2&lt;/li&gt;
    &lt;li&gt;Item 3&lt;/li&gt;
&lt;/ul&gt;
</code></pre>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <pre>
<code class="html" data-lang="HTML">&lt;pre&gt;
    &lt;code&gt;
        &lt;!-- insert code --&gt;
    &lt;/code&gt;
&lt;/pre&gt;</code>
                    </pre>
                </div>

                <div class="col-6">
                    <h6>As simple as that.</h6>
                    <p>If you would like to specify the language of the code, add the <code>data-lang</code> attribute to the <code>&lt;code&gt;</code> element.</p>
                </div>
            </div>
        </section>

        <section id="font" class="padtop">
            <div class="content">
                <h3>Font</h3>
                <div class="divider"></div>
                <p><b>Cirrus</b> incorporates beautiful typography to make your website stand out from the rest. Nunito Sans, by <a href="http://sansoxygen.com/" class="u u-LR"><b>Vernon Adams</b></a> is chosen for the default typography for most elements such as <code>paragraphs</code>, <code>articles</code>, <code>blockquotes</code>, and more while Montserrat adds a bold but elegant touch to titles. The <code>font-size</code> have been converted to rems which is independent of the font sizes of the parent elements. The default is set to 1rem (16px) where each interval of rem is 16 pixels.

                <div class="row">
                    <h1 class="uppercase">this is h1<span class="desc"><code>h1</code>4rem (48px)</span></h1>
                    <h2 class="uppercase">this is h2<span class="desc"><code>h2</code>3.5rem (40px)</span></h1></h2>
                    <h3 class="uppercase">this is h3<span class="desc"><code>h3</code>3rem (32px)</span></h1></h3>
                    <h4 class="uppercase">this is h4<span class="desc"><code>h4</code>2.5rem (24px)</span></h1></h4>
                    <h5 class="uppercase">this is h5<span class="desc"><code>h5</code>2rem (16px)</span></h1></h5>
                    <h6 class="uppercase">this is h6<span class="desc"><code>h6</code>1rem (12px)</span></h1></h6>
                </div>
                <a href="docs/font"><button class="pull-right">See More<i class="fa fa-chevron-right pad-left"></i></button></a>
            </div>
        </section>

         <section id="footer" class="padtop">
            <div class="content">
                <h3>Footer</h3>
                <div class="divider"></div>
                <p>Who said making footers had to be difficult? Cirrus provides a powerful set of base styles to allow you to create the footer that fits your website.</p>
                 <a href="docs/footer"><button class="pull-right">See More<i class="fa fa-chevron-right pad-left"></i></button></a>
            </div>
        </section>

         <section id="forms" class="padtop">
            <div class="content">
                <h3>Forms</h3>
                <div class="divider"></div>
                <p>When was the last time you had fun creating and designing forms? With Cirrus, yesterday's headaches are no more. Easily build beautiful and responsive forms with a couple of lines of code.</p>
                <form>
                    <div class="row">
                        <div class="col-6"><input type="text" placeholder="Your Name"></div>
                        <div class="col-6">
                            <select class="select" placeholder="Select One">
                            <option value="I love this">I love Cirrus</option>
                            <option value="I still love this">I also love Cirrus</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12"><textarea type="text" placeholder="Your Message"></textarea></div>
                    </div>
                    <div class="pull-right">
                        <input type="checkbox" id="check">
                         <label class="label-inline" for="check">Check me!</label>
                    </div>
                    <div class="row">
                        <input type="submit" class="btn-accent">
                    </div>
                </form>

                <a href="docs/forms"><button class="pull-right">See More<i class="fa fa-chevron-right pad-left"></i></button></a>
            </div>
        </section>

         <section id="head" class="padtop">
            <div class="content">
                <h3>Header</h3>
                <div class="divider"></div>
                <p>Cirrus packs the essentials you need to make a stunning header with a fully featured nav-bar, menu item, dropdown menus, and more. The nav-bar can easily be set to stick to the top of the page if needed.</p>
                <a href="docs/header"><button class="pull-right">See More<i class="fa fa-chevron-right pad-left"></i></button></a>
            </div>
        </section>

         <section id="layout" class="padtop">
            <div class="content">
                <h3>Layout</h3>
                <div class="divider"></div>
                <p>Perhaps the most annoying part of designing a website is ensuring that column widths are consistent throughout the website. Cirrus aims to solve this issue with a simple 12-column grid system powered by <b>Flexbox</b> to provide an easy to maintain and scalable framework. In addition to the column system, there are a bunch of different components such as splashes, frames, and additional page styles to make prototyping webpages a breeze.</p>

                <div id="grids" class="row">
                    <div class="row">
                        <div class="col-12">
                            <div class="uppercase">col-12</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="uppercase">col-6</div>
                        </div>
                        <div class="col-6">
                            <div class="uppercase">col-6</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="uppercase">col-4</div>
                        </div>
                        <div class="col-4">
                            <div class="uppercase">col-4</div>
                        </div>
                        <div class="col-4">
                            <div class="uppercase">col-4</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <div class="uppercase">col-3</div>
                        </div>
                        <div class="col-3">
                            <div class="uppercase">col-3</div>
                        </div>
                        <div class="col-3">
                            <div class="uppercase">col-3</div>
                        </div>
                        <div class="col-3">
                            <div class="uppercase">col-3</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <div class="uppercase">col-2</div>
                        </div>
                        <div class="col-2">
                            <div class="uppercase">col-2</div>
                        </div>
                        <div class="col-2">
                            <div class="uppercase">col-2</div>
                        </div>
                        <div class="col-2">
                            <div class="uppercase">col-2</div>
                        </div>
                        <div class="col-2">
                            <div class="uppercase">col-2</div>
                        </div>
                        <div class="col-2">
                            <div class="uppercase">col-2</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <div class="uppercase">col-1</div>
                        </div>
                        <div class="col-1">
                            <div class="uppercase">col-1</div>
                        </div>
                        <div class="col-1">
                            <div class="uppercase">col-1</div>
                        </div>
                        <div class="col-1">
                            <div class="uppercase">col-1</div>
                        </div>
                        <div class="col-1">
                            <div class="uppercase">col-1</div>
                        </div>
                        <div class="col-1">
                            <div class="uppercase">col-1</div>
                        </div>
                        <div class="col-1">
                            <div class="uppercase">col-1</div>
                        </div>
                        <div class="col-1">
                            <div class="uppercase">col-1</div>
                        </div>
                        <div class="col-1">
                            <div class="uppercase">col-1</div>
                        </div>
                        <div class="col-1">
                            <div class="uppercase">col-1</div>
                        </div>
                        <div class="col-1">
                            <div class="uppercase">col-1</div>
                        </div>
                        <div class="col-1">
                            <div class="uppercase">col-1</div>
                        </div>
                    </div>

                </div>
                <space></space>
                <a href="docs/layout"><button class="pull-right">See More<i class="fa fa-chevron-right pad-left"></i></button></a>
            </div>
        </section>

         <section id="links" class="padtop">
            <div class="content">
                <h3>Links</h3>
                <div class="divider"></div>
                <p>With Cirrus, links do not have to be plain. Choose from all the different styles that Cirrus offers to make your website stand out.</p>
                <div class="row">
                    <div class="row">
                            <a href="#">I am just an ordinary link</a>
                    </div>
                    <div class="row">
                        <a href="#" class="u u-LR">Hover me</a>
                    </div>
                    <div class="row">
                        <span class="usquare">
                            <a href="#" class="utb utb-OLR">I am a square</a>
                        </span>
                    </div>
                </div> 
                 <div class="row">
                        <pre>
<code class="html" data-lang="HTML">&lt;div class=&quot;row&quot;&gt;
    &lt;a href=&quot;#&quot;&gt;I am just an ordinary link&lt;/a&gt;
&lt;/div&gt;
&lt;div class=&quot;row&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;u u-LR&quot;&gt;Hover me&lt;/a&gt;
&lt;/div&gt;
&lt;div class=&quot;row&quot;&gt;
    &lt;span class=&quot;usquare&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;utb utb-OLR&quot;&gt;I am a square&lt;/a&gt;
    &lt;/span&gt;
&lt;/div&gt;</code></pre>
                </div>
                <space></space>
                <a href="docs/links"><button class="pull-right">See More<i class="fa fa-chevron-right pad-left"></i></button></a>
            </div>
        </section>

         <section id="lists" class="padtop">
            <div class="content">
                <h3>Lists</h3>
                <div class="divider"></div>
                <p>Lists are a common way to organize and present data on webpages. You can easily create elegant unordered lists with <code>ul</code>, ordered lists with <code>ol</code>, and description lists with <code>dl</code>. <code>ul</code> will show bullets, <code>ol</code> will show numbers for ordering, and <code>dl</code> will indent itself if the list item is a sub item. In addition to basic lists, you can create navigation menus and custom drop down menus.</p>
                
                <div class="row">
                    <div class="col-4">
                        <ul>
                            <li>Item 1</li>
                            <li>Item 2</li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <ol>
                            <li>Item 1</li>
                            <li>Item 2</li>
                        </ol>
                    </div>
                    <div class="col-4">
                        <dl>
                            <dt>Main description</dt>
                            <dd>Sub item description</dd>
                        </dl>
                    </div>
                </div>

                <div class="row">
                    <pre>
    <code class="html" data-lang="HTML">&lt;div class=&quot;row&quot;&gt;
&lt;div class=&quot;col-4&quot;&gt;
    &lt;ul&gt;
        &lt;li&gt;Item 1&lt;/li&gt;
        &lt;li&gt;Item 2&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;div class=&quot;col-4&quot;&gt;
    &lt;ol&gt;
        &lt;li&gt;Item 1&lt;/li&gt;
        &lt;li&gt;Item 2&lt;/li&gt;
    &lt;/ol&gt;
&lt;/div&gt;
&lt;div class=&quot;col-4&quot;&gt;
    &lt;dl&gt;
        &lt;dt&gt;Main description&lt;/dt&gt;
        &lt;dd&gt;Sub item description&lt;/dd&gt;
    &lt;/dl&gt;
&lt;/div&gt;
&lt;/div&gt;</code>
                    </pre>

                    <space></space>
                    <a href="docs/lists"><button class="pull-right">See More<i class="fa fa-chevron-right pad-left"></i></button></a>
            </div>
        </section>

         <section id="table" class="padtop">
            <div class="content">
                <h3>Tables</h3>
                <div class="divider"></div>
                <p>Take the hassle out of styling your tables with Cirrus. Cirrus comes bundled with clean designs to fit any website.</p>

                <div class="row" style="
    overflow-x: scroll;">
                     <table class="table">
                    <!-- Set the table header and footer -->
                    <thead>
                        <tr>
                            <th><abbr title="Title1">T1</abbr></th>
                            <th><abbr title="Title2">T2</abbr></th>
                            <th><abbr title="Title3">T3</abbr></th>
                            <th><abbr title="Title4">T4</abbr></th>
                            <th><abbr title="Title5">T5</abbr></th>
                            <th><abbr title="Short">S</abbr></th>
                            <th>Notes</th>
                        </tr>
                        </thead>
                        <!-- Optional -->
                        <tfoot>
                        <tr>
                            <th><abbr title="Title1">T1</abbr></th>
                            <th><abbr title="Title2">T2</abbr></th>
                            <th><abbr title="Title3">T3</abbr></th>
                            <th><abbr title="Title4">T4</abbr></th>
                            <th><abbr title="Title5">T5</abbr></th>
                            <th><abbr title="Short">S</abbr></th>
                            <th>Notes</th>
                        </tr>
                        </tfoot>

                    <tr><th>1</th><td>Row:1 Cell:1</td><td>Row:1 Cell:2</td><td>Row:1 Cell:3</td><td>Row:1 Cell:4</td><td>S</td><td>Row:1 Cell:5</td></tr>
                    <tr><th>2</th><td>Row:2 Cell:1</td><td>Row:2 Cell:2</td><td>Row:2 Cell:3</td><td>Row:2 Cell:4</td><td>S</td><td>Row:2 Cell:5</td></tr>
                    <tr><th>3</th><td>Row:3 Cell:1</td><td>Row:3 Cell:2</td><td>Row:3 Cell:3</td><td>Row:3 Cell:4</td><td>S</td><td>Row:3 Cell:5</td></tr>
                    <tr><th>4</th><td>Row:4 Cell:1</td><td>Row:4 Cell:2</td><td>Row:4 Cell:3</td><td>Row:4 Cell:4</td><td>S</td><td>Row:4 Cell:5</td></tr>
                    <tr><th>5</th><td>Row:5 Cell:1</td><td>Row:5 Cell:2</td><td>Row:5 Cell:3</td><td>Row:5 Cell:4</td><td>S</td><td>Row:5 Cell:5</td></tr>
                    <tr><th>6</th><td>Row:6 Cell:1</td><td>Row:6 Cell:2</td><td>Row:6 Cell:3</td><td>Row:6 Cell:4</td><td>S</td><td>Row:6 Cell:5</td></tr>
                </table>

                </div>

                <space></space>
                    <a href="./docs/tables/"><button class="pull-right">See More<i class="fa fa-chevron-right pad-left"></i></button></a>
            </div>
        </section>

        <section id="utils" class="padtop">
            <div class="content">
                <h3>Utilities</h3>
                <div class="divider"></div>
                <p>Something still not looking quite right? Cirrus comes with many CSS fixes to fix those anoying situations.</p>
                <space></space>
                    <a href="./docs/utils"><button class="pull-right">See More<i class="fa fa-chevron-right pad-left"></i></button></a>
            </div>
        </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script async src="demo_res/js/app.js"></script>
    <script async src="demo_res/js/smoothscroll.js"></script>

    <script src="https://use.fontawesome.com/a696b91557.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.11.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.7.1/clipboard.min.js"></script> <!-- clipboard.js -->
  </body>

  <footer>
        <h6 class="white uppercase">Cirrus</h6>
        <div class="content">
            <div class="divider"></div>
            <!--<li class="no-bullets footer-list-title">Docs</li>-->
            <div class="row">
                <div class="col-3">
                    <ul class="no-bullets">
                        <a href="./docs/animations">
                            <li class="list-item">Animations</li>
                        </a>
                        <a href="./docs/buttons">
                            <li class="list-item">Buttons</li>
                        </a>
                        <a href="./docs/components">
                            <li class="list-item">Components</li>
                        </a>
                        <ul>
                </div>
                <div class="col-3">
                    <ul class="no-bullets">
                        <a href="./docs/font">
                            <li class="list-item">Font</li>
                        </a>
                        <a href="./docs/footer">
                            <li class="list-item">Footer</li>
                        </a>
                        <a href="./docs/forms">
                            <li class="list-item">Forms</li>
                        </a>
                        <ul>
                </div>
                <div class="col-3">
                    <ul class="no-bullets">
                        <a href="./docs/header">
                            <li class="list-item">Header</li>
                        </a>
                        <a href="./docs/layout">
                            <li class="list-item">Layout</li>
                        </a>
                        <a href="./docs/links">
                            <li class="list-item">Links</li>
                        </a>
                        <ul>
                </div>
                <div class="col-3">
                    <ul class="no-bullets">
                        <a href="./docs/lists">
                            <li class="list-item">Lists</li>
                        </a>
                        <a href="./docs/tables">
                            <li class="list-item">Table</li>
                        </a>
                        <a href="./docs/utils">
                            <li class="list-item">Util</li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
        <p class="subtitle">The source code is licensed <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content is licensed <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY-NC-SA 4.0</a>.</p>
        <p>Made with <i class="fa fa-heart pulse" aria-hidden="true"></i> by <a href="http://stanleylim.me" target="_blank">Stanley Lim</a>
        </p>
    </footer>
</html>
