<!--page qui traite le formulaire et affiche la confirmation-->
<?php

print_r($_POST);

//$_POST est -il vide ?
if(empty($_POST)) {
    echo 'le formulaire n\'a pas été soumis correctement';
    exit();
}

// $_POST['nom'] est -il inferieur à 80 caracteres

if (isset($_POST) ) {
    
    echo "Formulaire soumis avec succès !";
} else {
    echo "Erreur : Le champ ne doit pas dépasser 80 caractères.";
    exit();
}


// et si $_POST['nom']) n'existe pas 

//existe t-il un $_post ?
if (isset($_POST['nom']) ) {
    
    echo "OK";
} else {
    echo "Erreur le nom";
    exit();
}


//controle du formulaire


// existe t-il Nom: $_POST['nom']


// controler le champs Nom: $_POST['nom']


?>

<h1>Nous avons bien reçu votre message</h1>

Nom: [Nom]<br/> <?php echo ($_POST['nom']);?>
E-mail: [Prénom] <br/> <?php echo ($_POST['email'])  ; ?>
Telephone: [telephone] <br/> <?php echo ($_POST['telephone']); ?>
Message: [message] <br/>  <?php echo ($_POST['message']); ?>
Objet: [objet]<br/> <?php echo ($_POST['objet']);?>
loisirs: [loisirs]<br/> <?php echo ($_POST['loisirs']);?>
secret: [secret]<br/> <?php echo ($_POST['secret']);?>
majeur: [majeur]<br/> <?php echo ($_POST['majeur']);?>


