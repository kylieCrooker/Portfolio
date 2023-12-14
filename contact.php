<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("universalHeadElements.html") ?>
    <title>Kylie Crooker - Contact</title>
</head>

<body>
    <?php include("header.html"); ?>
    <div id="main">
        <div class="content-box-contact">
            <div class="contact-links">
                <h2>Contact Me
                </h2>
                <a href="mailto:kyliecrooker@hopeworks.org" title="Kyliecrooker@hopeworks.org" class="link"
                    target="_blank">Kyliecrooker@hopeworks.org</a>
                <a href="tel:1-856-870-0296" title="(856)-870-0296" class="link" target="_blank">(856)-870-0296</a>
            </div>
            <div class="contact-form">
                <p>Contact form</p>
                <form action="email.php" method="post">
                    <div class="contact-row">
                        <input required type="text" name="name" placeholder="Full name">
                        <input required type="text" name="mail" placeholder="Your e-mail">
                    </div>
                    <textarea required name="message" placeholder="Message"></textarea>
                    <button type="submit" name="submit">SEND MESSAGE</button>
                </form>

                <?php if (isset($_GET["mailsend"])) { ?>
                <p class="notification success">Email sent!
                    <?php } ?>
                    <?php if (isset($_GET["failsend"])) { ?>
                <p class="notification error">Email could not be sent! Please check your inputs
                <p>
                    <?php } ?>

            </div>
            <hr>
            <div class="spotlight-links">
                <a href="Kylie Crooker October 2023 Resume.pdf" target="_blank" title="My Resume" class="link"
                    download="Kylie Crooker October 2023 Resume"><i class="fa-regular fa-file-lines"></i></a>
                <a href="https://www.linkedin.com/in/kylie-crooker/" target="_blank" title="My LinkedIn" class="link"><i
                        class="fa-brands fa-linkedin"></i></a>
                <a href="https://codepen.io/Kylie-Crooker" target="_blank" title="My Codepen" class="link"><i
                        class="fa-brands fa-codepen"></i></a>
                <a href="https://github.com/kylieCrooker" target="_blank" title="My Github" class="link"><i
                        class="fa-brands fa-github"></i></a>
            </div>
            <hr>
        </div>
    </div>
    <div class="footer-spacer"></div>
    <?php include("footer.html"); ?>
</body>

</html>