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
    <title>Connexion au Quizz World</title>
</head>
<body class="text-primary">
    <div class="d-flex flex-wrap bd-highlight mb-3">
        <h1 class="m-3 p-2 bd-highlight m-auto">Quizz World</h1>
    </div>
    <form class="p-2 bg-opacity">
    <div class="text-center">
        <h2 class="my-5">Administration du Quizz World</h2>
    </div>
    <div class="table-responsive">
    <table class="table  text-center m-auto table-striped table-primary">
    
        ID
        Titre
        Nom de l'image
        difficulté
        Supprimé
        Validé
       
<?php
include 'database.php';
$pdo = Database::connect();
    // interrogation BDD
        $sql = "select * FROM admistration "; 
        $reponse = $pdo->query($sql);
while($ligne = $reponse -> fetch() ){
    echo "".$ligne["id"]."";
    echo "<a href='edite.php?code= $ligne[titre]'>".$ligne["titre"]."</a>";
    echo "".$ligne["image"]."";
    echo "".$ligne["difficulter"]."";
    echo "<a href='supprimer.php?code= $ligne[id]'> Suprimer </a>";
    echo "<a href='valide.php?code= $ligne[id]'>Valider</a>";
}
?>
    
</table>
<a class="p-2 bd-highlight text-decoration-none" href="connexion.php?action=deconnecter">Déconnexion</a>
<a class="p-2 bd-highlight text-decoration-none" href="Admin.php">Retour</a>
</body>
</html>