<?php
if (empty($_COOKIE['pseudo'])&& empty($_COOKIE['pass'])) {
    header('location:connexion.php?action=deconnecter');
   }
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style1.css">
    
    <title>Accueil Administratif</title>
  </head>
  <body class="m-auto">
  <a class="p-2 bd-highlight text-decoration-none d-flex justify-content-end" href="connexion.php?action=deconnecter">Déconnexion</a>
      <h1 class="my-5 p-2 bd-highlight text-center text-primary">Quizz World</h1>
      <h2 class="my-5 p-2 bd-highlight text-center text-primary">Accueil Administratif</h2>
      <div class="text-center">
      <a href="adminchoix.php"><img class="w-25 mx-3" src="img/utlise.png" alt=""></a>
      <a href="admistration.php"><img class="w-25" src="img/admin.jpeg" alt=""></a>
      <a href="quiz.php"><img class="w-25 mx-3" src="img/quiz.jpeg" alt=""></a>
      </div>
  </body>
</html>