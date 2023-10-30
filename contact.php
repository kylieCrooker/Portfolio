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
    <title>Kylie Crooker - Contact</title>
</head>

<body>
    <?php include("header.html");?>
    <div id="main">
        <div class="contact-links">
            <h2>Contact Me</h2>
            <a href="mailto:kyliecrooker@hopeworks.org" title="Kyliecrooker@hopeworks.org" class="link"
                target="_blank">Kyliecrooker@hopeworks.org</a>
            <a href="tel:1-856-870-0296" title="(856)-870-0296" class="link" target="_blank">(856)-870-0296</a>
        </div>
        <div class="contact-form">
            <form>
                <label for="fname">Your Name</label>
                <input id="fname" placeholder="Your name...">
                <label for="email">Email Address</label>
                <input id="email" placeholder="A return email address...">
                <label for="subject">Subject</label>
                <input id="subject" placeholder="The reason you're sending this message...">

                <label for="message">Your Message</label>
                <textarea id="message" placeholder="The content of your message..."></textarea>
            </form>
        </div>
        <hr style="margin-bottom: 30px;">
        <div class="spotlight-links" style="margin-bottom: 40px;">
            <a href="Kylie Crooker October 2023 Resume.pdf" target="_blank" title="My Resume" class="link"
                download="Kylie Crooker October 2023 Resume"><i class="fa-regular fa-file-lines"></i></a>
            <a href="https://www.linkedin.com/in/kylie-crooker/" target="_blank" title="My LinkedIn" class="link"><i
                    class="fa-brands fa-linkedin"></i></a>
            <a href="https://codepen.io/Kylie-Crooker" target="_blank" title="My Codepen" class="link"><i
                    class="fa-brands fa-codepen"></i></a>
            <a href="https://github.com/kylieCrooker" target="_blank" title="My Github" class="link"><i
                    class="fa-brands fa-github"></i></a>
        </div>
        <div style="width: 100%; height: 50px;"></div>
    </div>
    <?php include("footer.html");?>
</body>

</html>