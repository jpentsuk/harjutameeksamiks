<?php

// kood võetud Tiia Tänava materjalidest
// muutujatenimed on samad, mis piltide puhul, aga üles laadida saab vaid docx laiendiga faile
$allowedExts = array("docx");
$allowedTypes = array("application/vnd.openxmlformats-officedocument.wordprocessingml.document");
$extension = end(explode(".", $_FILES['pilt']["name"]));
$bytes= 1000000000000000000;
$loc = "uploads";

if (in_array($_FILES['pilt']["type"], $allowedTypes) && ($_FILES['pilt']["size"] < $bytes) && in_array($extension, $allowedExts) ) {
// fail õiget tüüpi ja suurusega

    if ($_FILES['pilt']["error"] > 0) {
        echo "faili üleslaadimine luhtus, veakood: " . $_FILES['pilt']["error"];
    } else {

        if ( file_exists("$loc/" . $_FILES['pilt']["name"]) ) {
// samanimeline fail on kaustas $loc olemas ära uuesti lae, prindi failinimi

            echo "fail $loc/".$_FILES['pilt']["name"]." juba eksisteerib";
        } else {
// kõik ok, aseta pilt kausta $loc

            move_uploaded_file($_FILES['pilt']["tmp_name"], $loc."/" . $_FILES['pilt']["name"]);
            echo "faili ".$_FILES['pilt']["name"]." laadmine kausta $loc edukas";
        }
    }
} else {
    echo "Fail ei ole sbivat tüüpi või on vales mõõtmes";
}
// failide lugemine töötab
// saadud https://stackoverflow.com/questions/12801370/count-how-many-files-in-directory-php

$failid = scandir($loc);
$kogus = count($failid);
echo "<br>";
echo "Kokku on selles kataloogis ";
echo $kogus-2;
echo " dokumenti";