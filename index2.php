<?php
 require_once "cur.php";

$dir    = 'd:/www3/music';
//if ($_POST["text"]=="query") {
$files2 = scandir($dir, 1);
$i=random_int(0,count($song)-9);
$trek="https://mezzoforte.ru/s/sektor_gaza/".$song[$i].".mp3";
echo $trek;
//}

?>