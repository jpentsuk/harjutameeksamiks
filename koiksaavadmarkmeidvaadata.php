<?php

include ("uhendus.php");
$marge="SELECT marge FROM koiksaavadmarkmeidvaadata";

$result = mysql_query($marge) or die(mysql_error());
echo "<table><tr><td>Märkmed:</td></tr><tr></tr>";
while($row = mysql_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td>" . $row['marge'] . "</td>";
    echo "</tr>";
}
echo "</table>";


?>
<html>
<head>
    <title></title>
</head>
<body>
<form method="POST" action="koiksaavadmarkmeidvaadatauuendus.php">

    <input type="text" name="marge">
    <br>
    <input type="submit" name="Saada" value="Uuenda märge">
</form>
</body>
</html>


