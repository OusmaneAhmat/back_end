<!-- Page qui affiche le formulaire HTML -->
<!-- Champs : nom, email, telephone, message -->
<!DOCTYPE html>
<html lang="fr">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wvalueth=device-wvalueth, initial-scale=1.0">
    <title>Formulaire Client</title>
<style>

    body{

        background-color: cadetblue;
    }
    
    .validation{
       padding: 50px;
       text-transform: uppercase;
       text-align: center;
      
    }

    .produits{
    text-transform: uppercase;

    }

</style>

</head>
 
<body>
 
    <h1>Formulaire client</h1>
 
    <form action="resultatClient.php" method="POST">
        <div>
            <label for="nom"><strong>Nom*:</strong></label>
            <input type="text" name="nom" value="nom" required>
        </div>
        <br>
        <div>
            <label for="prénom"><strong> Prénom*:</strong></label>
            <input type="text" name="prénom" value="prénom" required>
        </div>
        <br>
        <div>
            <label for="dateDeNaissance"><strong>Date de naissance*:</strong></label>
            <input type="date" name="dateDeNaissance" value="dateDeNaissance" required>
        </div>
        <br>

        <div>
            <label for="abonnementNewsletter"><strong>Abonnement Newsletler*:</strong></label>
            <input type="radio" name="abonnementNewsletter" value="abonnementNewsletter " required> Oui
            <input type="radio" name="abonnementNewsletter" value="abonnementNewsletter " required> Non
        </div>
        <br>

        <div>
            <label for="email"><strong>Email*:</strong></label>
            <input type="email" name="email" value="email" required>
        </div>
        <br>
            <label for="produits">produits</label>
            <select name="produits[]" multiple>
                <option value="chaussures">chaussures</option>
                <option value="pulls">pulls</option>
                <option value="pantalons">pantalons</option>
                <option value="echarpes">Echarpes</option>
            </select>
            <br>
            <div class="validation">
                
                <button type="submit"><strong>Valider</strong></button>
            </div>


        <!-- <div>
            <label for="Porduits"><strong>produit*: :</strong></label>
            <input type="Porduits" name="Porduits" value="" required>
            
        </div> -->
        
       






<!-- 
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
            <label for="produit">produit</label>
            <input type="radio" name="produit" value="produit" >produit required
            <input type="radio" name="produit" value="lecture" >lecture
            <input type="radio" name="produit" value="musique" >musique
           
    
        </div>

        <div>
            <input type="submit" value="Envoyer le message">
        </div> -->
        <br>
    </form>
 
</body>
 
</html>