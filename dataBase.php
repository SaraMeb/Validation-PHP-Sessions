<?php
function getAllShoes(){
  $connec = new PDO("mysql:dbname=Shop-DB", 'root', '1234');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare("SELECT shoes.id, shoes.name, types.type, quantity FROM shoes INNER JOIN types ON shoes.type_id=types.id;");
  $request->execute();
  return $request->fetchAll();
}
function getAllTypes(){
  $connec = new PDO("mysql:dbname=Shop-DB", 'root', '1234');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare("SELECT * FROM types;");
  $request->execute();
  return $request->fetchAll();
}
function addAccount($pseudo, $email, $pass){
  $connec = new PDO("mysql:dbname=Shop-DB", 'root', '1234');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare("INSERT INTO users(username, email, password) VALUES (:pseudo, :email, :pass);");

  $request->execute([
    ":pseudo" => $pseudo,
    ":email" => $email,
    ":pass" => $pass,

  ]);
}
function getOneShoe($id) {
    $connec = new PDO('mysql:dbname=Shop-DB', 'root', '1234');
    $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $request = $connec->prepare('SELECT id, name FROM shoes WHERE id = :id;');
    $request->execute([
      ":id" => $id,
    ]);
    return $request->fetch();
  }
