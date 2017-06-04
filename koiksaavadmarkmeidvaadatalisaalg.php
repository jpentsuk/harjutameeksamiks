<?php
header('charset=utf-8');
echo "märge lisatud";
$marge = "algmärge";
include("uhendus.php");
$abi6="INSERT INTO koiksaavadmarkmeidvaadata (marge) VALUES
('$marge')";


mysql_query($abi6);