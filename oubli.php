<?php
// Vu qu'on utilise la superglobal $_SESSION nous devons obligatoirement spécifier un session_start() au début du code.
session_start();
    // Si il existe une $_SESSION['id'], alors je redirige l'utilisateur vers le fichier compte.php
    if (isset($_SESSION['id'])) {
        header('Location: compte.php');
    }
?>
<!DOCTYPE html>
<html lang="fr">
      <head>
        <meta charset="utf-8">
        <title>Mot de passe oublié</title>
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,700,300">
        <link rel="stylesheet" href="css/style.css">
      </head>
      <body>
        <?php include 'include/header.php'; ?>
        <main>
            <div class="container">
                <h1 class="text-center">Mot de passe oublié</h1>
                <hr>
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="well">
                            <form action="oubli.php" method="post" novalidate>
                                <input type="email" name="email" class="form-control" placeholder="Saisir ici, l'adresse e-mail de votre compte">
                                <hr>
                                <input type="submit" class="btn btn-primary btn-block" value="Soumettre">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
        <?php include 'include/footer.php' ?>
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>
