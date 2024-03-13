<?php
$jeune='distraction';
echo $jeune ;

$centre=10;
$ecole=8;
$resultat= $centre + $ecole ;
echo'<br/>';

echo $resultat . '<br/>';

echo $jeune.$resultat;



$apprenants = [
        [
        'nom'  => 'Ahmed',
        'age'  => 42,
        'lieu' => 'poitiers',
        'adresse' => 'ibra@gmail.com',
        'mail' => 'GAEC des Fermiers Limousins',
           
        
    ],
        [
        'nom'  => 'David',
        'age'  => 35,
        'lieu' => 'poitiers',
        'adresse' => 'ibra@gmail.com',
        'mail' => 'GAEC des Fermiers Limousins',
           
        
    ],
        [
        'nom'  => 'Franck',
        'age'  => 17,
        'lieu' => 'poitiers',
        'adresse' => 'pierre de couvbertin',
        'mail' => 'ibra@gmail.com',
        
        
    ],
        [
        'nom'  => 'Charles',
        'age'  => 2,
        'lieu' => 'poitiers',
        'adresse' => 'ibra@gmail.com',
        'mail' => 'GAEC des Fermiers Limousins',
           
        
    
    ],
];

// print_r($apprenants);

foreach ($apprenants as $personne) {
    $resultat .=  "Nom : " . $personne['nom'] . ", Age : " . $personne['age'] . ",lieu : " . $personne['lieu']. ",adresse : " . $personne['adresse'] . ",mail:" .$personne['mail'] ."</br>";
}
echo $resultat;

//afficher les personnes qui ont plus de 20ans.
foreach ($apprenants as $personne){
    if($personne['age'] < 20)
        echo  "Nom : " . $personne['nom'] . ", Age : " . $personne['age'] . ",lieu : " . $personne['lieu']. ",adresse : " . $personne['adresse'] . ",mail:" .$personne['mail'] ."</br>";
    else{
       echo $personne['nom'] . 'a moins de 20 ans'.'<br>';

    }
    if($personne['age'] <3){
        echo $personne['nom'] . 'est un bébé'.'<br>';

    }
}
// si la persoànne a moins de 3ans

