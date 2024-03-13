<?php 
include('panierDonnees.php'); 
include('panierFonctions.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>panier page</title>
</head>
<body>
<h1>Mon panier</h1>
 <!--le role de foreach de d'afficher au temps de fois le panier qui se troue dans son corps-->
    
 

 <?php foreach ($panier as $fruit) { ?>
        <li>
        Produit: 
        Quantité : <?php echo $fruit['quantite'] ; ?>
        prixKgHT:  <?php echo $fruit['prixKgHT'] ; ?>
         Prix total HT :<?php echo panierProduitPrixTotalHT($fruit['quantite'], $fruit['prixKgHT'] ) ; ?> € 
        </li>
        <?php } ?> <br/>

        
    <strong>TOTAL PANIER HT : <?php echo panierMontantTotalHT($panier)  ; ?>
    <strong>TOTAL PANIER TTC : <?php echo panierMontantTotalTTC($panier, $tauxTva) ; ?> 
 

</body>
</html>