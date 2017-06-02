<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laigid failis</title>

</head>
<body>
<?php
header('charset=utf-8');

echo "<script type='text/javascript'>alert('Laik lisatud!')</script>";

$fail = fopen("laik.txt", "a") or die("Ei suuda faili avada!");
$laiks = 1;

fwrite($fail, $laiks . "\r\n");

// hetkel ta need laigid tegelt loendab ära
echo "<br>";
$failike = "laik.txt";
$myfile = fopen("laik.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("laik.txt"));
echo "<br>";
$read = count(file($failike));
echo "Selles failis on " . $read . " rida";
fclose($myfile);
?>

</body>
</html>
