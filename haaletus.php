<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kuvame välja jah-d ja ei-d</title>

</head>
<body>
<br>
<?php
header('charset=utf-8');


include("uhendus.php");
echo "tänan vastamast";
if ($_POST[vastus]=="jah")
{
    $vastus = "jah";
}
else if ($_POST[vastus]=="ei")
{
    $vastus = "ei";
}

$abi6="INSERT INTO haaletustabel (vastus) VALUES 
('$vastus')";


mysql_query($abi6);



$jahkogus="SELECT COUNT(vastus) as kokkujah FROM haaletustabel WHERE vastus ='jah' ";
$arvjah=mysql_query($jahkogus);

$rida1=mysql_fetch_array($arvjah);
echo "Jah de arv on ";
echo $rida1[kokkujah];

echo "<br>";

$eikogus="SELECT COUNT(vastus) as kokkuei FROM haaletustabel WHERE vastus ='ei' ";
$arvei=mysql_query($eikogus);

$rida1=mysql_fetch_array($arvei);
echo "Ei de arv on ";
echo $rida1[kokkuei];
?>
</body>
</html>
