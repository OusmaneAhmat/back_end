<?php
//Exercice 1
// comparer les timestamps
  $date1 = "2024-02-19"; 
  $date2 = "2023-12-25"; 
  $timestamp1 = strtotime($date1); 
  $timestamp2 = strtotime($date2); 
  if ($timestamp1 > $timestamp2){
    echo "$date1 est supérieur à $date2";
  } else
    echo "$date1 est inférieur à $date2"; 
    echo '<br>';
{   

  }
    
// Convertir la date en timestamp
$timestamp1 = strtotime('$date1').'<br>';
$timestamp2 = strtotime('$date2');
// Afficher le timestamp
echo  $timestamp1.$timestamp2 ;

//Exercice 2
// convertir la date en timestamps
$timestamp1 = strtotime('2024-02-19').'<br>';
$timestamp2 = strtotime('2023-12-25');
    echo  $timestamp1.$timestamp2 ;

// calculer le nombre des jours qui separent deux dates 
$nomvreJour = (strtotime($date1) - strtotime($date2)); 
echo '<br>';
echo  $nomvreJour;

// et calculer la difference en secondes
// $nomvreJour = $timestamp1 - $timestamp2;
// // Afficher la différence
// echo "Différence en secondes : " . $nomvreJour;

// et convertir cette difference en jours, avant de l'afficher


//Exercice 3

$date = '2024-02-19';
// convertir cette date en timestamps
$timestamp3 = strtotime('$date');
echo  $timestamp3 . '<br>';

// trouver le jour de la semaine correspondant au timestamps
$jourSemaine = date('l', $timestamp3).'<br>';
echo $jourSemaine;
echo '<br>';

//exercie 4
$dateDeNaissance = '1990-01-01';
// convertir la date de naissance en timesatmps
$timestamp4 = strtotime($dateDeNaissance);

// echo  $timestamp4. '<br>';

// obtenir le timestamps actuel
$timestampActuel = time();
// Affichez le timestamp actuel
echo "Timestamp actuel : " . $timestampActuel;
echo '<br>';

$differenceEnSecondes = $timestampActuel - $timestamp4;
// Afficher la différence
echo "Différence en secondes : " . $differenceEnSecondes;
echo '<br>';
// 

$differenceAnne = $differenceEnSecondes/31536000;
echo $differenceAnne.'<br>';

//exercice
// recupération de la date actuelle et de la date de fi d'année
$dateActuelle = time();
$dateFinAnnee = date('y');

//convertir la date de fin année en timestamp

if (!empty($_POST)) {
    // Etape 1 : Transformer les dates en timestamp
    $dateActuelle = date("Y-m-d");
    $dateActuelleTimestamp = strtotime($dateActuelle);
    $dateNaissance = $_POST['naissance'];
    // Récupération de la date du prochaine anniversaire
    $dateNaissanceTableau = explode("-", $dateNaissance);
    print_r($dateNaissanceTableau);
    // 2024-09-18
    $dateAnniversaire = date("Y") . '-' . $dateNaissanceTableau[1] . '-' . $dateNaissanceTableau[2]; // 2024-09-18
    // Affichage du nombre de jours restant avant la date anniversaire
    
}
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dates</title>
</head>
<body>
    <form action="" method="post">
        <input type="date" name="naissance" />
        <input type="submit" name="valider" value="valider" />
    </form>
   
</body>
</html>

?>
