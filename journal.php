<?php
$file = fopen("journal.txt", "a");
$date= date( "Y-m-d H:i:s");
echo $date;

$txt = "$date\n".$_SERVER['REMOTE_ADDR'];
fwrite($file, $txt);
fclose($file);
// MIP
echo $_SERVER['REMOTE_ADDR'] .'<br>';
// Date et l'heure actuelle
$date= date( "Y-m-d H:i:s");
echo $date;
// file_get_contents($date,  );


?> ;

