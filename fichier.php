<!-- Lecture d'un fichier -->
<?php
$filename = "example.txt";
$content = file_get_contents($filename);
echo $content;

?> 

<!-- Ecrire dans un fichier -->
<?php
$filename = "example.txt";
$content = "Hello, Web Impulse!";
file_put_contents($filename, $content);
?>


<!-- Ouvrir et écrire dans un fichier : -->
<?php
$file = fopen("example.txt", "w");
$txt = "Nouveau contenu\n";
fwrite($file, $txt);
fclose($file);
?>
