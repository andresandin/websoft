<?php 
$pageTitle = "Flags";
$headerTitle = "Flags";
require __DIR__ . "/view/header.php"; ?>

<!DOCTYPE html>
<html>

<body class="flags">
    <div id="content">
        <a href="#" id="draw-elfenbenskusten">Elfenbenskusten</a> |
        <a href="#" id="draw-france">France</a> |
        <a href="#" id="draw-italy">Italy</a>
        <div id="flag"></div>
    </div>

    <script src="js/flag.js"></script>
</body>

</html>
<?php require __DIR__ . "/view/movingDuck.php"; ?>
<?php require __DIR__ . "/view/footer.php"; ?>