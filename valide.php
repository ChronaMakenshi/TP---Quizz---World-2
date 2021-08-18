<?php 
    include 'database.php';
if (isset($_POST['submit'])) {
    $pdo = Database::connect();
        // interrogation BDD
            $sql = "update inscription set role=:role where id=:code"; 
            $reponse = $pdo->prepare($sql);

   
    $code= $_GET['code'];
    $role=$_POST['couleur'];
   
    $reponse->execute( array(":code"=>$code,":role"=>$role));


     header("location:adminchoix.php");
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
<h2 class="text-center">Modifier un joueur</h2>
<form action="" method="POST">
<table class="table mt-5 text-center m-auto table-striped table-primary text-primary">
    <tr>
      <th class="text-primary">pseudo</th>
      <td class="text-primary">mail</td>
      <td class="text-primary">role</td>
      <td class="text-primary">Validé</td>
      <td class="text-primary">Annulé</td>
    </tr>
      <td class="text-primary"><p name="pseudo" value="<?php echo $_GET['pseudo']?>"><?php echo $_GET['pseudo']?></p></label><br></td>
      <td class="text-primary"><p name="mail"value="<?php echo $_GET['mail']?>" ><?php echo $_GET['mail']?></p></label></td>
      <td class="text-primary">
                    <select name="couleur" style="width:300px;">
                            <option value="admin">Admin</option>
                            <option value="joueur">Joueur</option>
                            <option value="editeur">Editeur</option>
                    </select>
      </td>
      <td scope="col"><button type="submit" name="submit" class="btn btn-outline-success mx-2">validé</button></label></td>
      <td scope="col"><button formaction="adminchoix.php" class="btn btn-outline-danger">annuler</button></label></td>
</table>
</form>
</body>
</html>


