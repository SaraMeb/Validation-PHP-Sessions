<?php
session_start();

  require_once './dataBase.php';

  $shoe = getOneShoe($_POST['id']);

?>
  <form class="" action="./panier.php" method="post">
    <input type="hidden" name="id" value="<?php echo $product['id']?>">
    <input required type="text" name="shoe" value="<?php echo $shoe['name'] ?>" placeholder="shoe name">
    <input required type="number" name="quantity" value="<?php echo $product['quantity'] ?>" placeholder="quantity">
    <select name="size" placeholder="Entrez votre pointure">
      <option value="35">35</option>
      <option value="36">36</option>
      <option value="37">37</option>
      <option value="38">38</option>
      <option value="39">39</option>
      <option value="40">40</option>
      <option value="41">41</option>
      <option value="42">42</option>
    </select>
    <input type="submit" value="Ajouter au panier">

  </form>
