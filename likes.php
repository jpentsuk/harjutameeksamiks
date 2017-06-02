<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Like-d</title>

</head>
<body>
<br>

<?php
header('charset=utf-8');

echo "<script type='text/javascript'>alert('Like lisatud!')</script>";
include("uhendus.php");

$laiks = htmlspecialchars($_POST[laiks]);



$abi6="INSERT INTO laigid (laiks) VALUES 
('$laiks')";


mysql_query($abi6);

?>

<?php

include ("uhendus.php");
$kogus="SELECT COUNT(laiks) as kokku FROM laigid";
$arv=mysql_query($kogus);

$rida1=mysql_fetch_array($arv);
echo "Like de arv lehel on ";
echo $rida1[kokku];


?>

</body>
</html>


