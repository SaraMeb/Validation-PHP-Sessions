<?php
require_once('./database.php');
require_once('./templates/header.html');
  $shoes = getAllShoes();
  $types = getAllTypes();
  session_start();

  if (isset($_POST['pseudo']) && isset($_POST['pass'])){
    $_SESSION['pseudo'] = $_POST['pseudo'] ;
    $_SESSION['pass'] = $_POST['pass'] ;
    echo "Bonjour,  " . $_SESSION['pseudo'] ." " . " !<br>";
    ?>
    <button type="submit" value="Déconnexion"><a href="./logout.php">Déconnexion</a></button>
    <?php
   } else {
       echo "Merci de vous connecter!";
       ?>
       <form method="post" action="./admin.php">
         <label for="pseudo">Username:</label>
         <input type="text" name="pseudo" placeholder="Entrez votre pseudo" required><br>
         <label for="pass">Password :</label>
         <input type="password" name="pass" required><br>
         <input type="submit" value="Login">
       </form>
       <?php
      }


        ?>

   <h1>All Shoes</h1>
   <div>
     <table>
      <tr>
        <th>Shoes</th>
        <th>Types</th>
      </tr>
      <?php

      foreach ($shoes as $key => $value) {
        $tr = "<tr>";
        $tr .= "<td>" . $value['name'] . "</td>";
        $tr .= "<td>". $value['type'] . "</td>";
        $tr .= "<td><form action='/addToBasket.php' method='POST'><input type='hidden' name='id' value='" . $value['id'] . "'><input type='submit' value='+'></form></td>";
        $tr .= "</tr>";
        echo $tr;
      }

      // foreach ($products as $key => $value) {
      //   echo "<tr>";
      //   echo "<td>" . $value['product'] . "</td>";
      //   echo "<td>" . $value['disponibility'] . "</td>";
      //   echo "<td>" . $value['quantity'] . "</td>";
      //   echo "<td>" . $value['type'] . "</td>";
      //   echo "<td><form action='/update.php' method='POST'><input type='hidden' name='id' value='" . $value['id'] . "'><input type='submit' value='U'></form></td>";
      //
      //   echo "</tr>";
      // }
?>
     </table>
   </div>
   <p><a href="/">Revenir en haut de la page<a></p>
 </section>

 <?php
 require_once('./templates/footer.html');
