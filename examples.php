<!DOCTYPE html>
<html>

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
    <div style="width: 100%; height: 50px;"></div>
    <?php include("footer.html"); ?>
</body>

</html>