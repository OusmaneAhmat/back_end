
<?php
/*
function panierProduitPrixTotalHT($quantite, $prixKgHT)
{
   $prixTotalKgHT = $quantite*$prixKgHT ;
return $prixKgHT ;
} 

/*

function panierMontantTotalHT($panier)
{
   $montantHT = 0;
   foreach ($panier as $fruit) { 

      $montantHT += panierProduitPrixTotalHT($fruit['quantite'], $fruit['prixKgHT']);
   } 
    return $montantHT;

}


/*


function panierMontantTotalTTC($panier, $tauxTva)
{
   
/*
   $montantTva = panierMontantTotalHT($panier)*($tauxTva) ;

   $montantHT= panierMontantTotalHT($panier)
   
   $montantTVA = montantHT * tauxTVA/100 ;
   $montantTTC = montantHT + tauxTva ;


   return $montantTTC;
}
/*
