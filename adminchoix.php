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
    <form class="p-2 bg-opacity" method="post">
    <div class="text-center">
        <h2 class="my-5">Administration du Quizz World</h2>
       
    </div>
    <div class="table-responsive">
    <table class="table  text-center m-auto table-striped table-primary">
    <tr>
        <td>ID</td>
        <td>Pseudo</td>
        <td>Adresse mail</td>
        <td>Role</td>
        <td>Supprimé</td>
<?php
include 'database.php';
$pdo = Database::connect();
    // interrogation BDD
        $sql = "select * FROM inscription where role='null'"; 
        $reponse = $pdo->query($sql);
while($ligne = $reponse -> fetch() ){
    $pseudo=$ligne['pseudo'];
    $mail=$ligne['mail'];
    $id=$ligne['id'];
    $role=$ligne['role'];
   
    echo "<tr><td>".$id."</td>";
    echo "<td><a href='valide.php?code=$id&pseudo=$pseudo&mail=$mail&role=$role'>".$pseudo."</a></td>";
    echo "<td>".$mail."</td>";
    echo"<td>".$role."</td>";
    echo "<td><a href='supprimer1.php?code= $id'> Suprimer </a></td>";
    echo "</tr>";
    
}

if (empty($_COOKIE['pseudo'])&& empty($_COOKIE['pass'])) {
 header('location:connexion.php?action=deconnecter');
}





?>
</form>
</tr>
</table>
<a class="p-2 bd-highlight text-decoration-none" href="connexion.php?action=deconnecter">Déconnexion</a>
</body>
</html>