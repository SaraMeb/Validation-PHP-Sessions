<!Doctype html>
<html lang="fr" dir="ltr">
<head>
  <title>Connexion</title>
  <meta charset="utf-8">
</head>
<body>
  <form action="./actions/addAccount.php" method="post">
    <label for="pseudo">Pseudo:</label><br>
    <input required name="pseudo" type="text" placeholder="Entrez votre pseudo"><br>
    <label for="pseudo">Email:</label><br>
    <input required name="email" type="text" placeholder="Entrez votre adresse mail"><br>
    <label for="pseudo">Password:</label><br>
    <input required name="pass" type="pass" placeholder="Entrez votre mot de passe"><br>
    <input class="submit" type="submit" value="Inscription">
  </form>

</body>
</html>
