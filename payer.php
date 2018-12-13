<?php
session_start();
if(isset($_POST['payer'])){
  echo "Payement efféctué avec succés";
}


?>
<h2>Pour continuer vos achats, cliquez ici : <a href="./index.php">Accueil</a></h2>
