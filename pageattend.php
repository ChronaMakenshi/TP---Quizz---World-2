<?php
if (empty($_COOKIE['pseudo']) OR empty($_COOKIE['password'])) {
    header('location:connexion.php?action=deconnecter');
   }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style1.css">
    <title>salle d'attente</title>
</head>
<body class="text-primary">
   
        <h1 class="text-center mt-5">En attente de validation de l'Administrateur</h1>
        <iframe class="d-flex m-auto mt-5" width="560" height="315" src="https://www.youtube.com/embed/x5J5_R-GtyI?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <a class="p-2 bd-highlight text-decoration-none d-flex justify-content-center" href="connexion.php?action=deconnecter">Retour du Roi</a>
</body>
</html>