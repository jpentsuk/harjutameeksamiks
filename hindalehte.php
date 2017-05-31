<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Keskmine hinne</title>

</head>
<body>

<?php
header('charset=utf-8');

echo "<script type='text/javascript'>alert('Hinnatud!')</script>";
include("uhendus.php");

$hinne = htmlspecialchars($_POST[hinne]);



$abi6="INSERT INTO hinded (hinne) VALUES 
('$hinne')";


mysql_query($abi6);

?>

<?php

include ("uhendus.php");
$kesk="SELECT AVG(hinne) as keskmine FROM hinded";
$arv=mysql_query($kesk);

$rida1=mysql_fetch_array($arv);

echo $rida1[keskmine];

?>

</body>
</html>


