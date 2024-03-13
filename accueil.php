<?php
/* 
$nombreAnneescollege = (int) 5 ;
$nombreAnneesLycee = (int) 2 ;      
$nombreAnneesUniversitaire = (int) 1 ;
//Declaration de la variable nombreAnneeTotal
$nombreAnnéeTotal = $nombreAnneescollege+ $nombreAnneesLycee+ $nombreAnneesUniversitaire;

//affiche le $nombreAnnéeActivite dans une phrase de presentation
echo "je suis en activité de formation et professionnelle depuis $nombreAnnéeTotal" ;

echo '<br>' ;
echo '<br>' ;

//Déclaration des variables 
$b = (int) 8 ;
$a = (int) 5 ;
//incrementation des variables
$a++ ;
++$b ;

// Si $b est supérieur à $a
if ($b > $a) {
    // Affiche que $b est supérieur à $a
    echo "$b est supérieur à $a";
} else {
    echo "$b n'est pas supérieur à $a";
}

for ($produitsPanier= 1; $produitsPanier <= $nombreProduitsPanier ; ++$produitsPanier ) {
    echo $produitsPanier . '<br/>' ;
}


//table de multiplicaton
*/

/*fontionnalité tables de multiplication comme ci-dessous


<h3>Table de 1 </h3>
<ul>
    <li>1 * = 1 <strong>1</strong> </li>
    <li>2 * = 1 <strong>2</strong></li>
    <li>3 * = 1 <strong>3</strong></li>
<ul>

<h3>Table de 2 </h3>
<ul>
    <li> 1 ...
    <li> 2 ...
    <li> 3 ...
 <ul>

 <h3>Table de 3 </h3>
 <ul>
    <li> 1 ...
    <li> 2...
    <li> 3...
<ul>
*/

/*
 //Declarationet attribution de variable et $compteurtable et $compteurmultiplicateur

 $compteurtable=1 ;
$compteurmultiplicateur = 1 ;

//declaration et attribution des variables $nombreDeTables et $nombreDemultiplicatur

$compteurtable=10 ;
$compteurmultiplicateur = 10 ; 

for ($compteurtable = 1; $compteurtable <= 10; $compteurtable++) {
    echo "<h3>Table de $compteurtable </h3>";
    echo "<ul>";
}

$premierBoucleCompteur = 1 ; 
$premierBoucleCompteur = 1 ;  

$premierBoucleleCompeteur =1 ;  //letat du compteur au depart de la boucle
$premierBoucleleCompeteur <= 5 ;  //tant que le compteur est inferieur ou egal à zero
++$premierBoucleCompteur           // A chaque itération de boucle, ajoute 1 au compteur

echo '-> premiere boucle: ' . $premierBoucleleCompeteure .' <br/>' ;  //affiche la valeur de compteur

for(
    $deuxiemeBoucleCompteur = 1 ;
    $deuxiemeBoucleCompteur <= 5 ;
){
   echo ' -> deuxieme boucle:' . $deuxiemeBoucleCompteur . '<br/>' ;
}
*/






/*
for ($table = 1 ; $table <= 10 ; ++$table) {
    echo '<h3> Table n° ' . $table . '</h3>' ; 
    echo '<ul> ' ;

    for ($multiplicateur = 1 ; $multiplicateur <= 10 ; ++$multiplicateur) {
        $resultat = $table * $multiplicateur;

        echo '<li>'. $table .' x '. $multiplicateur.' = '. $resultat . '</li>
        ';
       
    }
   
    echo '</ul> ' ;
}


//Declaration des tableaux
*/

/*
$apprenants= [
    [
        'nom' => 'Ahmet' ,
        'email' => 'sabir@gmail.com' ,
        'telephone' => '0617915341',
        'age' => 17 ,
        'vaccine'=> true ,
      
    ] ,
    [
        'nom' => 'Charles' ,
        'email' => 'boss@gmail.com' ,
        'telephone' => '0917915358'  ,
        'age' => 27,
        'vaccine'=> false ,
       
    ],
    [   'nom' => 'franck' ,
        'email' => 'francis@gmail.com' ,
        'telephone' => '0917915358'  ,
        'age' => 30,
        'vaccine'=> false ,
       
    ] ,
    ] ;
    /*

//print_r ($apprenants); 

 // foreach(Ecole as )
//ajoute une personne au tableau
//supprimer la premiere personne du tableau
//melanger le tableau en ordre aleatoire 
/*
$nouvellePersonne = [ 
    'nom' => 'yannick',
    'prenom' => 'John',
    'age' => 86 ,
    'email'=> 'yanis@gmail.coml',
    'telephone' => '0917915358'  ,
    'vaccine'=> false ,

] ;
$apprenants[] = $nouvellePersonne ;

    unset($apprenants[0]);

shuffle ($apprenants) ;

foreach ($apprenants as $personne) { 

    echo 'Nom:' . $personne['nom'] . ', email:' . $personne['email'] . ', telephone:'.  $personne['telephone'] . ', age:'. $personne['age'] . ', vaccine:'. $personne['vaccine' ]  . '<br/>';
    
//filtrer les elements du tableau
// pour n'afficher que les personnes majeures

    if ($personne['age'] < 18) {
        echo 'mineur';
    } else {
       echo 'majeur';
    }
} 
*/

/*
$voitures = [
    [
        'nom' => 'C3',
        'modele' => '2023',
        'marque' => [
            'nom' => 'Citroën',
            'ville' => [
                'nom' => 'Paris',
                'latitude' => 0.785,
                'longitude' => 1.865,
            ],
            'chiffreAffaires' => 13679403,
        ],
    ],
    [
        'nom' => 'GLE',
        'modele' => '2023',
        'marque' => [
            'nom' => 'Mercedes',
            'ville' => [
                'nom' => 'Berlin',
                'latitude' => 0.785,
                'longitude' => 1.865,
            ],
            'chiffreAffaires' => 97324546804,
        ],
    ],
    [
        'nom' => 'Dacia',
        'modele' => '2012',
        'marque' => [
            'nom' => 'Renault',
            'ville' => [
                'nom' => 'Poitiers',
                'latitude' => 0.785,
                'longitude' => 1.865,
            ],
            'chiffreAffaires' => 5000,
        ],
    ]
];

foreach ($voitures as $voiture) { 
    
    echo 
        'Nom:' . $voiture['nom'] . 
        ', modele:' . $voiture['modele']  . 
        'marque :' . $voiture['marque']['nom'] . 
        '<br/>';
}
*/

/*
$a = 0;
while ($a <= 10) {
echo $a . '<br/>' ;
 $a++;
}
*/

/*
$day= "lundi" ;
switch ($day) {
    case "lundi":
        echo "C'est le début de la semaine.";
        break;
    case "Vendredi":
        echo "C'est bientôt le week-end.";
        break;
    default:
        echo "Un autre jour de la semaine.";
}
*/

/*
//fonctionn php
$prenom = 'ousmane';
function ditBonjour($prenom)
{
    echo 'Bonjour'. $prenom ;
}

//Exécution de la function

ditBonjour ($prenom);
*/

/*
// Declaration de la function de l'addition
function  additionner ($nombre1, $nombre2)
{ 
    $addition = $nombre1 + $nombre2 ; 
    return $addition ;
}
    //additionner 
     echo additionner (5, 8) ;
*/



/*
// Déclaration de la function de calcul de metre cubes
//m3 = longeur*largeur*hauteur
// Appel de la function de calcul de metre cubes

function calculMetreCubes($longeur, $largeur , $hauteur )
{ 
    $calcul = $longeur*$largeur*$hauteur ; 
    return $calcul;
}
    //calcul metrecubes
    echo calculMetreCubes(8, 5, 2) ;
*/



/*
// Declaration de tableau de fruit
$fruits = ['pomme', 'banane' , 'oragne'] ; 

// declaration de la function qui liste le tableau de fruits*
function listerFruits( $fruits) { 

    $listerFruits = '-' ;
    // retoune la liste des fruitq dans de caractere
    foreach ($fruits as $fruit) { 
       
        $listerFruits .= $fruit . ' - ' ;

        
        
    }
    return $listerFruits ;
}

// Affichage de la liste de fruits
echo listerFruits($fruits) ;
*/



