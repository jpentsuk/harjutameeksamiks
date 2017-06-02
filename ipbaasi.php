<?php
echo "tere";
header('charset=utf-8');
$ipaadress = $_SERVER['REMOTE_ADDR'];
include("uhendus.php");
$abi6="INSERT INTO ipaadressid (ipaadress) VALUES
('$ipaadress')";


mysql_query($abi6);



include ("uhendus.php");
$kesk="SELECT COUNT(ipaadress) as kogus FROM ipaadressid";
$arv=mysql_query($kesk);

$rida1=mysql_fetch_array($arv);

echo "Hetkel on andmebaasis " . $rida1[kogus] . " aadressi";

?>