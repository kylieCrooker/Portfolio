<!DOCTYPE html>
<html>

<head>
    <!--Universal head elements start-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/footer.css">
    <script src="javascript/universal.js"></script>
    <script src="https://kit.fontawesome.com/0b123f4857.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <!--Universal head elements end-->
    <title>Kylie Crooker - Projects</title>
</head>

<body>
    <?php include("header.html");?>
    <div id="main">
        <div class="spotlight">
            <h2>Necronomi.com</h2>
            <iframe height="400" style="width: 100%;" scrolling="no" title="Necronomi.com - Personal Project"
                src="https://codepen.io/Kylie-Crooker/embed/preview/wvREoMv?default-tab=html%2Cresult&theme-id=dark"
                frameborder="no" loading="lazy" allowtransparency="true" allowfullscreen="true">
                See the Pen <a href="https://codepen.io/Kylie-Crooker/pen/wvREoMv">
                    Necronomi.com - Personal Project</a> by Kylie Crooker (<a
                    href="https://codepen.io/Kylie-Crooker">@Kylie-Crooker</a>)
                on <a href="https://codepen.io">CodePen</a>.
            </iframe>
            <p>A personal website I made as part of my training in <a href="https://hopeworks.org/"
                    title="Hopeworks Site" target="_blank" class="link">Hopeworks</a>, demonstrating both my creativity
                and
                understanding of HTML, CSS, and Javascript. The site is heavily stylized in the theme of late 90s web
                design, including the obnoxious animated ads.</p>
            <p>The site was essentially a creative writing project, written to be a fictional ghost hunting guide,
                written by a character from a game I'm working on in my free time.</p>
            <div class="spotlight-links">
                <a href="https://codepen.io/Kylie-Crooker/pen/wvREoMv" target="_blank" title="Necronomi.com Codepen"
                    class="link"><i class="fa-brands fa-codepen"></i></a>
                <a href="https://github.com/kylieCrooker/Necronomi.com" target="_blank" title="Necronomi.com Repository"
                    class="link"><i class="fa-brands fa-github"></i></a>
            </div>
            <hr>
        </div>
        <div class="spotlight">
            <h2>Kylie's Mod Spotlight</h2>
            <iframe height="800" style="width: 100%;" scrolling="yes" title="Kylie's mod spotlight - Wordpress site"
                src="https://kyliesmodspotlight.wordpress.com/" frameborder="no" loading="lazy" allowtransparency="true"
                allowfullscreen="true"></iframe>
            <p>A wordpress site I made as part of my training in <a href="https://hopeworks.org/" title="Hopeworks Site"
                    target="_blank" class="link">Hopeworks</a>, demonstrating my understanding of the
                wordpress platform and its unique quirks and limitations, as well as my understanding of modern web
                design.</p>
            <p>In this case I made a website centered around the Minecraft modding scene, an online community built
                around creating third-party addons for a popular video game. This page highlights some of my favorite
                creations, and details why I like them.</p>
            <div class="spotlight-links">
                <a href="https://kyliesmodspotlight.wordpress.com/" target="_blank"
                    title="Kylies mod spotlight homepage" class="link"><i class="fa-brands fa-wordpress-simple"></i></a>
            </div>
            <hr>
        </div>
        <div class="spotlight">
            <h2>Pixlr Photo editing</h2>
            <div class="gallery">
                <div class="gallery-column"><img src="images/pixlr/boxkrump.PNG"
                        alt="The base image that I started with for each project." onclick="galleryFocus(this)"><img
                        src="images/pixlr/Krump in blu.PNG" onclick="galleryFocus(this)"
                        alt="Replace the background of the image with a solid color."></div>
                <div class="gallery-column"><img src="images/pixlr/Ecstacy of krump.png" onclick="galleryFocus(this)"
                        alt="Applying filters and using the grow tool."><img
                        src="images/pixlr/Krump, destroyer of worlds.PNG" onclick="galleryFocus(this)"
                        alt="Replace the background of the image with another image."></div>
                <div class="gallery-column"><img class="large-gallery"
                        src="images/pixlr/krump vengeance of the night final.PNG" onclick="galleryFocus(this)"
                        alt="Adding text to the image, and also styling it like a movie poster."><img
                        src="images/pixlr/krumptown.png" onclick="galleryFocus(this)"
                        alt="Combining multiple images into one project.">
                </div>
                <div class="gallery-column"><img class="large-gallery" src="images/pixlr/krump self portrait png.png"
                        onclick="galleryFocus(this)"
                        alt="A self portrait, combining all the demonstrated skills into one image.">
                </div>
            </div>
            <div id="zoombox">
                <img class="zoom-gallery" id="zoom-gallery" src="images/pixlr/boxkrump.PNG">
                <p class="text-gallery" id="text-gallery">The base image that I started with for each project.</p>
            </div>
            <p>Pixlr is a free equivalent to photoshop, and was what I used in my <a href="https://hopeworks.org/"
                    title="Hopeworks Site" target="_blank" class="link">Hopeworks</a> training to practice and
                demonstrate my ability to edit images for use in various projects. I decided to base all of my projects
                off of a particular base image that I just found particularly funny.</p>
            <hr>
        </div>
        <div class="spotlight">
            <h2>This Portfolio!</h2>
            <iframe height="800" style="width: 100%;" scrolling="yes" title="Kylie's mod spotlight - Wordpress site"
                src="https://kylie.crookers.com/" frameborder="no" loading="lazy" allowtransparency="true"
                allowfullscreen="true"></iframe>
            <p>This portfolio was made to be an addition to my portfolio in and of itself. I intentionally avoided using
                any site-building tools like wix or wordpress, and instead built my site entirely from scratch. It is
                hosted on a subdomain of my family's own domain, set up through InMotion hosting. </p>
            <p>I used the hosting services Cpanel interface, Github, and VScode to develop this site, and keep its files
                updated through the built-in version control software. I also made special effort to do my best to make
                sure the site was usable on a number of different devices, as it is made to scale with the width of the
                users screen.</p>
            <p>I know in the grand scheme of things, this site is nowhere near perfect, but I like to think it
                demonstrates a solid grasp of web development, especially considering I've developed it in less than a
                couple weeks, after only a couple months of training.</p>
            <div class="spotlight-links">
                <a href="https://kylie.crookers.com/"
                    title="My portfolio, dunno how else you would find this site without this link, its nearly impossible"
                    class="link"><i class="fa-solid fa-globe"></i></a>
            </div>
            <hr style="margin-bottom: 40px;">
        </div>
    </div>
    <div style="width: 100%; height: 50px;"></div>
    <?php include("footer.html");?>
</body>

</html>