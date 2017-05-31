<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kommentaarid</title>

</head>
<body>

<?php
header('charset=utf-8');

echo "<script type='text/javascript'>alert('Kommentaar lisatud!')</script>";
include("uhendus.php");

$kommentaar = htmlspecialchars($_POST[kommentaar]);



$abi6="INSERT INTO kommentaarid (kommentaar) VALUES 
('$kommentaar')";


mysql_query($abi6);

?>

<?php

include ("uhendus.php");
$kommenaarid="SELECT kommentaar FROM kommentaarid";
$result = mysql_query($kommenaarid) or die(mysql_error());
echo "<table><tr><td>Kommentaarid:</td></tr><tr></tr>";
while($row = mysql_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td>" . $row['kommentaar'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>

</body>
</html>


