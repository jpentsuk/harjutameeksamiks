<?php


setcookie("viimanekylastuskord", time(), time()+60*5);
$timestamp = date('Y/m/d H:i:s',$_COOKIE['viimanekylastuskord']);
echo "Viimati külastasid seda lehekülge: ";
echo "<br>";
echo $timestamp;