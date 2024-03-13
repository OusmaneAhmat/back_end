<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>


<style>
body{
    background-color: pink;
}

.button{
    text-align: center;

}
.button:hover {
  background-color: crimson;
}


</style>

</head>
<body>
<form action="donneeslogin.php" method="post">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required>
        <br><br>
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <div class="button">
        <button type="submit"><strong>Se Connecter</strong></button>
        </div>

    
    </form>

    <h1>Mon Image</h1>
   <img src="./image/image.jpg" alt="photo">


      
</body>
</html>