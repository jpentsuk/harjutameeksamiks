<?php

include("uhendus.php");
mysql_query( "SET NAMES utf8" );
$abi3="UPDATE koiksaavadmarkmeidvaadata SET marge='$_POST[marge]' ";
mysql_query($abi3)or die(mysql_error());

echo "Andmed uuendatud";



