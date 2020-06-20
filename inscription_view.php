<form method="POST">
  <input type="text" name="nom" placeholder="Nom" maxlength="50" required> <br>
  <input type="text" name="prenom" placeholder="Prenom" maxlength="50" required> <br>
  <input type="email" name="mail" placeholder="Adresse Mail" maxlength="50" required> <br>
  <input type="text" name="login" placeholder="Nom d'utilisateur" maxlength="30" required> <br>
  <input type="password" id="password" name="password" placeholder="Mot de passe" required> <br>
  <input type="password" id="password1" name="password1" placeholder="Confirmer le mot de passe" required> <br>
  <input type="submit" name="boutonInscription" value="S'inscrire">
</form>
<input type="checkbox" id="afficheMDP" name="afficheMDP" onclick="afficheMDP()">
<label for="afficheMDP">Afficher le mot de passe</label>

    <?php
    if(isset($_POST['boutonInscription'])) {
      if ($_POST["password"] == $_POST["password1"]) {
          if ($inscription->rowcount()==1) {
            ?>
            <p>Utilisateur créé avec succès</p>
            <?php
          } else {
            ?>
            <p>Login ou adresse mail déjà utilisé, veuillez en choisir un autre</p>
            <?php
          }
      } else {
        ?>
        <p>Login et/ou mot de passe incorrect</p>
        <?php
      }
    }
     ?>
