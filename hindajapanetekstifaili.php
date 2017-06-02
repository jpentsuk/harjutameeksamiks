<?php
$fail = fopen("hinded.txt", "a") or die("Ei suuda faili avada!");

$hinne = htmlspecialchars($_POST['hinne']);

fwrite($fail, $hinne . "\r\n");


echo "<br>";
$failike = "hinded.txt";
$myfile = fopen("hinded.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("ip.txt"));
echo "<br>";

$kogus = count(file($failike));
$summa = array_sum(file($failike));
$keskmine = $summa/$kogus;

echo "Selle lehe keskmine hinne on " . $keskmine;
fclose($myfile);