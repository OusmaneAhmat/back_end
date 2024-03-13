<!-- créer un fichier blog
créer un rebertoireBloc pour stocker les articles -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <h1>Mon Blog</h1>
    <?php
    // ouvrir, accéder au dossier/blogg 
     //récupertaion de liste de fichiers
     
    $articles = scandir('./blogo');
    print_r($articles);
    foreach($articles as $article) {
    // lire le contenu de l'article
    //afficher le contenu de l'articloe
   
    $content = file_get_contents('./blogo/' . $article);
    echo $content;
   
   }

        
   echo $article . '<br>';

   

?>
</body>
</html> 