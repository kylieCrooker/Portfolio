<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("universalHeadElements.html") ?>
    <title>Kylie Crooker - Projects</title>
</head>

<body>
    <?php include("header.html"); ?>
    <div id="main">
        <div class="content-box-examples">
            <?php foreach (glob("examples/*.html") as $filename) {
                include($filename);
            } ?>
        </div>
    </div>
    <div class="footer-spacer"></div>
    <?php include("footer.html"); ?>
</body>

</html>