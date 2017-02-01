<?php
// Vu qu'on utilise la superglobal $_SESSION nous devons obligatoirement spécifier un session_start() au début du code.
session_start();
    // Si il n'existe pas de $_SESSION['id'], je redirige l'utilisateur vers le fichier connexion.php
    if (!isset($_SESSION['id'])) {
        header('Location: connexion.php');
    }
?>
<!DOCTYPE html>
<html lang="fr">
      <head>
           <meta charset="utf-8">
           <title>Changer de mot de passe</title>
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,700,300">
        <link rel="stylesheet" href="css/style.css">
      </head>
      <body>
        <?php include 'include/header.php'; ?>
        <main>
            <di class="container profil">
                <h1 class="text-center">Changer de mot de passe</h1>
                <hr>
                <di class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="well">
                            <form action="password.php" method="post">
                                <div class="form-group">
                                    <label for="oldpassword">Ancien mot de passe :</label>
                                    <input type="password" name="oldpassword" class="form-control" placeholder="Ancien mot de passe ici..." id="oldpassword">
                                </div>
                                <div class="form-group">
                                    <label for="newpassword">Nouveau mot de passe :</label>
                                    <input type="password" name="newpassword" class="form-control" placeholder="Nouveau mot de passe ici..." id="newpassword">
                                </div>
                                <div class="form-group">
                                    <label for="newpasswordconf">Confirmez le nouveau mot de passe :</label>
                                    <input type="password" name="newpasswordconf" class="form-control" placeholder="Confirmez ici..." id="newpasswordconf">
                                </div>
                                <hr>
                                <input type="submit" class="btn btn-primary btn-block" value="Changer de mot de passe">
                            </form>
                        </div>
                    </div>
                </di>
            </di>            
        </main>

        <?php include 'include/footer.php' ?>
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>
