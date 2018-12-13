<?php
require_once('./database.php');
require_once('./templates/header.html');

  session_start();

     if (isset($_POST['pseudo']) && isset($_POST['pass'])){
           $_SESSION['pseudo']=$_POST['pseudo'];
           $_SESSION['pass']=$_POST['pass'];

       echo "Bienvenue sur la page,  " . $_SESSION['pseudo'] . "!<br>";

     ?>
       <p>Pour vous déconnecter cliquez ici! <button type="submit" value="Logout"><a href="./logout.php">Déconnexion</a></button></p>
     <?php
       } else {
         echo "Merci de vous connecter!";
      ?>
      <form method="post" action="./home.php">
        <label for="pseudo">Username:</label>
        <input type="text" name="pseudo" placeholder="Entrez votre pseudo" required><br>
        <label for="pass">Password :</label>
        <input type="password" name="pass" required><br>
        <input type="submit" value="Login">
      </form>
      <?php
       };
       ?>
       <h1>Tu n'as pas encore de compte? <a href="login.php">Clique Ici!</a></h1> 
       <?php
 require_once('./templates/footer.html');
