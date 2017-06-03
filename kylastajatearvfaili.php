
<?php
header('charset=utf-8');

if (!isset($_COOKIE['visits'])) $_COOKIE['visits'] = 0;
$visits = $_COOKIE['visits'] + 1;
// kehtib aasta
setcookie('visits',$visits,time()+3600*24*365);



$fail = fopen("kylastused.txt", "a") or die("Ei suuda faili avada!");


fwrite($fail, $visits . "\r\n");

//Viimase külastuse aeg:
setcookie("viimanekylastus", time(), time()+60*5);
$aeg = date('Y/m/d H:i:s',$_COOKIE['viimanekylastus']);
echo "Viimane külastus " . $aeg;
echo "<br>";
echo "<br>";

/* See kood töötab kenasti
setcookie("viimanekylastus", time(), time()+60*5);
$aeg = date('Y/m/d H:i:s',$_COOKIE['viimanekylastus']);
echo $aeg;
*/



$failike = "kylastused.txt";
$myfile = fopen("kylastused.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("kylastused.txt"));
echo "<br>";
$read = count(file($failike));
echo "Sellel lehel on olnud " . $read . " külastust";

fclose($myfile);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Külastajate arv failis</title>

</head>
<body>
</body>
</html>
