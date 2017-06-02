<?php

echo "Tere, teie IP-aadress on: ";
$ipaadress = $_SERVER['REMOTE_ADDR'];
echo $ipaadress;

echo "Lisa aadress andmebaasi";

?>

<form method="POST" action="ipbaasi.php">

    <input type="submit" name="Salvesta" value="Salvesta aadress">
</form>


