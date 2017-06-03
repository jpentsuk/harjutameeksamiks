<?php
if (!isset($_COOKIE['kylastuskord'])) $_COOKIE['kylastuskord'] = 0;
$kylastus = $_COOKIE['kylastuskord'] + 1; setcookie('kylastuskord',$kylastus,time()+3600*24*365); ?>
    <html> <head> <title> Title </title> </head> <body>

<?php
if ($kylastus > 1) {
    echo "See on teie " . $kylastus . " külastus";
}
else {
    echo "Olete siin lehel esmakordselt";
}