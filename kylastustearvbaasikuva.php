<?php

if (!isset($_COOKIE['visits'])) $_COOKIE['visits'] = 0;
$visits = $_COOKIE['visits'] + 1; setcookie('visits',$visits,time()+3600*24*365); ?>
    <html> <head> <title> Title </title> </head> <body>

<?php
    if ($visits > 1) {
        echo "See on teie " . $visits . "külastus";
    }
    else {
        echo "Olete siin lehel esmakordselt";
    }

header('charset=utf-8');
include("uhendus.php");

$abi6="INSERT INTO kylastustearv (kylastustearv) VALUES 
('$visits')";


mysql_query($abi6);

$kogus="SELECT COUNT(kylastustearv) as kokku FROM kylastustearv";
$arv=mysql_query($kogus);

$rida1=mysql_fetch_array($arv);
echo "Külastuste arv lehel on ";
echo $rida1[kokku];