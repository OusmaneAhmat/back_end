<?php

print_r($_POST);

//$_POST est -il vide ?
if(empty($_POST)) {
    echo 'le formulaire n\'a pas été soumis correctement';
    
}

if(!empty($_POST)) {
    echo 'le formulaire n\'a pas été soumis correctement';
    
}

?>

<h1>Nous avons bien reçu votre message Ahmed</h1>

Nom: <br/> <?php echo ($_POST['nom']);?>
Prénom: <br/> <?php echo ($_POST['prénom'])  ; ?>
Date de naissance: <br/> <?php echo ($_POST['dateDeNaissance']); ?>
Abonnement Newsletter: <br/> <?php echo ($_POST['abonnementNewsletter']); ?>
Email: <br/> <?php echo ($_POST['email']); ?>

<?php
// print_r($_POST['produits']);
echo '<ul>';
foreach ($_POST['produits'] as $produit){
    // print_r($produit);
    
    echo '<li>' . $produit .  '</li>' ;

}

echo '</ul>';
// Chemin vers le fichier texte
$cheminFichier = "monFichier.txt";
// Contenu à écrire dans le fichier
$contenu = $_POST['nom'] .$_POST['prénom'].$_POST['dateDeNaissance'].$_POST['abonnementNewsletter'].$_POST['email'];
// Ouvrir le fichier en mode écriture ('w' pour écraser le contenu existant)
$fichier = fopen($cheminFichier, "w");
// Écrire le contenu dans le fichier
fwrite($fichier, $contenu);
// Fermer le fichier

echo "Le contenu a été écrit avec succès dans le fichier.";

foreach ($_POST['produits'] as $produit){
    // print_r($produit);
    
    fputs( $fichier, $produit) ;
}
fclose($fichier);
?>






