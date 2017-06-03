<?php

setcookie("viimanekylastus", time(), time()+60*5);
$tim = date('Y/m/d H:i:s',$_COOKIE['viimanekylastus']);
echo $tim;
header('charset=utf-8');
include("uhendus.php");
$abi6="INSERT INTO kylastusaegadetabel(aeg) VALUES
('$tim')";


mysql_query($abi6);

// kuvame nüüd kõik külastusajad

$ajad="SELECT aeg FROM kylastusaegadetabel";
$result = mysql_query($ajad) or die(mysql_error());
echo "<table><tr><td>Külastusajad:</td></tr><tr></tr>";
while($row = mysql_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td>" . $row['aeg'] . "</td>";
    echo "</tr>";
}
echo "</table>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hääletus</title>
</head>
<body>


</body>
</html>
