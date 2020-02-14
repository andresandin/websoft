<?php

echo "<h1>hello</h1>\n";

$var = 2;
$msg = " Andre Sandin";
$anotherMsg2 = "from Sweden";

echo " You know " . $msg . " " . $anotherMsg2 . "\n";

$die = rand(1, 6);
if($die > 1){
    echo " <p>Good roll...</p>\n";

}

echo "<br>You rolled a '$die'.\n";

$lotto = [];
for($i = 1; $i < 7; $i++){
    $lotto[] = rand(1, 35);
}

echo "<pre>";
var_dump($lotto);