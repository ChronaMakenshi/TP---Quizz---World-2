<!DOCTYPE html>
<html lang="en">
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
        <h2 class="my-5">Admistration du Quizz World</h2>
    </div>
    <div class="table-responsive">
    <table class="table  text-center m-auto table-striped table-primary">
    <tr>
        <td>ID</td>
        <td>Titre</td>
        <td>Nom de l'image</td>
        <td>Supprimé</td>
        <td>Validé</td>
<?php

include 'database.php';



$pdo = Database::connect();
    // interrogation BDD
        $sql = "select * FROM inscription "; 
        $reponse = $pdo->query($sql);
         
    

while($ligne = $reponse -> fetch() ){
    $pseudo=$ligne['pseudo'];
    $mail=$ligne['mail'];
    $id=$ligne['id'];
    $mail=$ligne['role'];
    echo "<tr><td>".$ligne["id"]."</td>";
    echo "<td>".$ligne["pseudo"]."</a></td>";
    echo "<td>".$ligne["mail"]."</td>";
    echo "<td><a href='supprimer1.php?code= $ligne[id]'> Suprimer </a></td>";
    echo "<td><a href='valide.php?code= $ligne[id]'>Valider</a></td></tr>";
}
?>
    </tr>
</table>

</body>
</html>