<?php 
//condition sur un age pour determinier si la perzsonne est mineur
// ou majeur
$age = 15 ;
//si la personne est majeurs Alors affiche ''Majeur'' SINON affiche 'Mineur

if($age == 17){
    echo 'Mineur' ;
} else {
    echo 'Majeur'  ;
}



$sexe= 'H , F' ;
if ($sexe=="H" || $sexe=="F"){
    echo "vous êtes un homme ou une femme";
}
    else{
    echo "vous etes ni un homme, ni une femme... peut etre un trans bésilien ?";

}


//condition sur la taille du prénom
// si prenom est de taille est superieur à 

$prenom= 'OusmaneAhmatibr';
if(strlen($prenom) > 20){
    echo 'prenom trop grand' ;
} else if(strlen($prenom) < 10){
    echo 'prenom petit' ;
}

//si la taille du prenom est inferieur 10 ou superieur 20
 
if(strlen($prenom)  <20 && strlen($prenom)>10){
    echo 'prenom de taille moyenne' ;
}

//si la taille du prenom est superieur à 15, inferieur à 30 et paire
//affiche prenom ok
if(strlen($prenom) >15 && strlen($prenom)<30 && strlen($prenom)&2 ){
    echo 'prenom OK' ;
}


