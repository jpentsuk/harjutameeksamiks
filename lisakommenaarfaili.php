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

$fail = fopen("uusfail.txt", "a") or die("Ei suuda faili avada!");
$komm = htmlspecialchars($_POST[kommentaar]);

fwrite($fail, $komm);
fclose($fail);

echo "<br>";

$myfile = fopen("uusfail.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("uusfail.txt"));
fclose($myfile);
?>

</body>
</html>
