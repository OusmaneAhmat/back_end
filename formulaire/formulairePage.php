<!-- Page qui affiche le formulaire HTML -->
<!-- Champs : nom, email, telephone, message -->
<!DOCTYPE html>
<html lang="fr">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wvalueth=device-wvalueth, initial-scale=1.0">
    <title>Formulaire de contact</title>
</head>
 
<body>
 
    <h1>Formulaire de contact</h1>
 
    <form action="formulaireConfirmation.php" method="POST">
        <div>
            <label for="nom">Nom</label>
            <input type="text" name="nom" value="nom" required>
        </div>
        <br>
        <div>
            <label for="telephone">Téléphone</label>
            <input type="tel" name="telephone" value="telephone" required>
        </div>
        <br>
        <div>
            <label for="email"><strong>E-mail :</strong></label>
            <input type="email" name="email" value="email" required>
        </div>
        <br>
        <div>
            <label for="message">Message</label>
            <textarea name="message" value="message"></textarea>
        </div>
        <br>

        <div>
            
            <label for="objet">Objet</label>

            <select name="objet" value="objet">

                <option value="Reclamation">Reclamation</option>
                <option value="question">Question</option>
                <option value="Demande">Demande</option>
            
             </select>

        </div>
        <br>


        <div>
            
            <label for="contact">contact</label>

            <select name="contact" multiple>

                <option value="telephone">telephone</option>
                <option value="mail">mail</option>
                <option value="courrier">courrier</option>
            
             </select>
        </div>

        <br>
        <div>
            
            <input type="hidden" name="secret" value="secret" >
        </div>
        <div>
            <label for="majeur">Majeur</label>
            <input type="checkbox" name="majeur" value="majeur" >
        </div>
        <br>
        <div>
            <label for="loisirs">loisirs</label>
            <input type="radio" name="loisirs" value="sport" >sport
            <input type="radio" name="loisirs" value="lecture" >lecture
            <input type="radio" name="loisirs" value="musique" >musique
           
    
        </div>

        <div>
            <input type="submit" value="Envoyer le message">
        </div>
        <br>
    </form>
 
</body>
 
</html>