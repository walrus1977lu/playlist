<?php

$ch = curl_init("https://mezzoforte.ru/s/sektor_gaza.html");
$fp = fopen("example_homepage.txt", "w");

curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
if(curl_error($ch)) {
    fwrite($fp, curl_error($ch));
}
curl_close($ch);
fclose($fp);

$filename = "example_homepage.txt";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);

$x = explode('"/s/sektor_gaza/', $contents);
for ($a=1;$a<count($x);$a++){
	$x2 = explode(".html", $x[$a]);
	//echo $x2[0];
	//echo'<br>';
	$song[$a]=$x2[0];
}
  //echo $song[7];

?>