<?php
session_start();
?>
<h1>Votre Panier</h1>

<?php
echo "Votre panier contient:"
. $_POST['shoe'] . " " .  "en taille" . " " . $_POST['size'] . " " . $_POST['quantity'] . " " . "en quantité "
?>
<form class="" action="./payer.php" method="post">
  <input type="hidden" name="payer" value="">
  <input type="submit" value="payer">

</form>
