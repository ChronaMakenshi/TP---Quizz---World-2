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
    <form class="p-2 bg-opacity" method="post">
    <div class="text-center">
        <h2 class="my-5">Administration du Quizz World</h2>
       
    </div>
    <div class="table-responsive">
    <table class="table  text-center m-auto table-striped table-primary">
    
        ID
        Pseudo
        Adresse mail
        Role
        Supprimé
<?php
include 'database.php';
$pdo = Database::connect();
$pdo1= Database::connect();
    // interrogation BDD
        $sql = "select * FROM inscription where role='null'"; 
        $sql1="select * FROM inscription";
        $reponse =$pdo->query($sql);
        $reponse1=$pdo1->query($sql1);
        Database::disconnect();
while($ligne = $reponse -> fetch() ){
    $pseudo=$ligne['pseudo'];
    $mail=$ligne['mail'];
    $id=$ligne['id'];
    $role=$ligne['role'];
   
    echo "".$id."";
    echo "<a href='valide.php?code=$id&pseudo=$pseudo&mail=$mail&role=$role'>".$pseudo."</a>";
    echo "".$mail."";
    echo"".$role."";
    echo "<a href='supprimer1.php?code= $id'> Suprimer </a>";
    echo "";
    
}


?>
</table>
<a class="p-2 bd-highlight text-decoration-none" href="connexion.php?action=deconnecter">Déconnexion</a>
<a class="p-2 bd-highlight text-decoration-none" href="Admin.php">Retour</a>
<div class="text-center">
        <h2 class="my-5">Tout les joueur inscript</h2>
       
    </div>
    
<table class="table  text-center m-auto table-striped table-primary">
    
        ID
        Pseudo
        Adresse mail
        Role
        Supprimé

<?php
while($ligne1 = $reponse1 -> fetch() ){
    $pseudo1=$ligne1['pseudo'];
    $mail1=$ligne1['mail'];
    $id1=$ligne1['id'];
    $role1=$ligne1['role'];
   
    echo "".$id1."";
    echo "<a href='valide.php?code=$id1&pseudo=$pseudo1&mail=$mail1&role=$role1'>".$pseudo1."</a>";
    echo "".$mail1."";
    echo"".$role1."";
    echo "<a href='supprimer1.php?code= $id1'> Suprimer </a>";
    echo "";
    
}
?>
</form>
</table>
<a class="p-2 bd-highlight text-decoration-none" href="connexion.php?action=deconnecter">Déconnexion</a>
<a class="p-2 bd-highlight text-decoration-none" href="Admin.php">Retour</a>
</body>
</html>