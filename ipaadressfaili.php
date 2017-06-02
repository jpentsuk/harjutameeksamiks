<?php

$ipaadress = $_SERVER['REMOTE_ADDR'];
echo "Teie IP-aadress on " . $ipaadress;

$fail = fopen("ip.txt", "a") or die("Ei suuda faili avada!");

fwrite($fail, $ipaadress . "\r\n");


echo "<br>";
$failike = "ip.txt";
$myfile = fopen("ip.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("ip.txt"));
echo "<br>";
$read = count(file($failike));
echo "Selles failis on " . $read . " aadressi";
fclose($myfile);
?>