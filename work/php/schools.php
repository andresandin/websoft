<?php
$pageTitle = "Schools";
$headerTitle = "Schools";
require __DIR__ . "/view/header.php"; ?>



<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style/style.css">       
    <button class="btn" onclick="createFetch()">Refresh</button>
  <table id="showData"></table>
  <style>
        th,
        td,
        p,
        input {
            font: 14px Verdana;
        }

        table,
        th,
        td {
            border: solid 1px #DDD;
            border-collapse: collapse;
            padding: 2px 3px;
            text-align: center;
        }

        th {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div id="content">
        <p>Lets fetch and display some data.</p>
    </div> 
    <script type="text/javascript" src="js/schools.js"></script>
</body>
</html>
<?php require __DIR__ . "/view/movingDuck.php"; ?>
<?php require __DIR__ . "/view/footer.php"; ?>