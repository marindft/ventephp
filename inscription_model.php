<?php
  include("bd_connect.php");

$inscription = $dbh->prepare('INSERT INTO user(nom,prenom,mail,login,password) SELECT :nom,:prenom,:mail,:login,:password WHERE NOT EXISTS (SELECT login,mail FROM user WHERE login = :login OR mail = :mail)');

//création dans la base de données d'un nouvel utilisateur
if(isset($_POST['boutonInscription'])) {
  if ($_POST["password"] == $_POST["password1"]) {
    $nom=htmlspecialchars($_POST["nom"]);
    $prenom=htmlspecialchars($_POST["prenom"]);
    $mail=htmlspecialchars($_POST["mail"]);
    $login=htmlspecialchars($_POST["login"]);
    $password=$_POST["password"];
    $password_hache = password_hash($password, PASSWORD_DEFAULT);
    $tab = array('nom' => $nom, 'prenom' => $prenom, 'mail' => $mail, 'login' => $login, 'password' => $password_hache);
    $inscription->execute($tab);
  }
}

 ?>
