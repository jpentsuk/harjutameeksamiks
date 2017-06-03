<?php
date_default_timezone_set('Europe/Helsinki');

$current_date = date('d/m/Y == H:i:s');
echo "Aeg serveris on ";
echo "<br>";
echo $current_date;



?>
<html>
<head>
    <title>

    </title>
    <script>var now = new Date();</script>";
</head>
</html>
<?php
echo "<br>";
echo "Kasutaja aeg arvutis on";
$variable = "<script>document.write(now)</script>";
echo $variable;

?>

