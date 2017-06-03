<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kuvame välja jah-d ja ei-d</title>

</head>
<body>
<br>

<?php

$kaatet1 = $_POST[kaatet1];
$kaatet2 = $_POST[kaatet2];

$hypotenuus = sqrt((pow($kaatet1, 2))+(pow($kaatet2, 2)));

echo "Hüpotenuus on " . $hypotenuus;

?>

</body>
</html>
