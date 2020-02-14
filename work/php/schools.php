<?php require __DIR__ . "/view/header.php"; ?>
<!doctype html>
<html>
<head>
    <title>Fetch</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style/style.css">   
    <button class="btn" onclick="CreateTableFromJSON()">Refresh</button>
  <table id="showData"></table>
</head>
<body>
    <h1>My Mega Sandbox</h1>
    <div id="content">
        <p>Lets fetch and display some data.</p>
    </div> 
    <script type="text/javascript" src="js/schools.js"></script>
</body>
</html>
<?php require __DIR__ . "/view/footer.php"; ?>