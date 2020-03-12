<?php
$pageTitle = "Lotto";
$headerTitle = "Lotto";
require __DIR__ . "/view/header.php";



$userRow = $_GET["row"] ?? null;

$userRowArray = explode(",", $userRow);
//var_dump($userRowArray);
//echo"<pre>";
//var_dump($_GET);

$lotto = [];
for($i = 1; $i < 8; $i++){
    $lotto[] = rand(1, 35);
    
    $lotto = array_unique($lotto);
    
}

sort($lotto);


require __DIR__ . "/view/lotto.php";