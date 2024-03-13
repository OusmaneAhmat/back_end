<?php
//recuperation du donne du formulaire
$username= $_POST['username']; 
$password = $_POST['password']; 
//creation d'un fichier pour sauvegarder les informations de la session
session_start();
$_SESSION['nom utilisateur'] = $username ;
$_SESSION['password'] = $password ;
// Lecture des données de session
echo "Bonjour, ".$_SESSION['nom utilisateur'] .'=' .$_SESSION['password'] ;
echo "Le mot de passe de l'utilisateur .............. est ..............."; 
echo '<br><br>';
echo "Le mot de passe de l'utilisateur ".$_SESSION['nom utilisateur']. " est " .$_SESSION['password'];



// //declaration des variables
// $head = $_POST['head']; 
// $body = $_POST['body']; 
// // Création d'un cookie
// setcookie("head", "body", time() + 3600, "/");
// //recupération d'un cookie
// if(isset($_COOKIE["head" && "body"])) {   
//      echo "Choose your color: " . $_COOKIE["head"].$_COOKIE["body"];
//  } else {    echo "I don't like this color."; }
 
 ?>;
