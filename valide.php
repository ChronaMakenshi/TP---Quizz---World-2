<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
<h1 class="text-center">Modifier un joueur</h1>
<form action="" method="POST">
<div class="col-2 m-auto   ">
<label class="text-center" for="">pseudo</label><br>
<p name="pseudo" value="<?php echo $_GET['pseudo']?>"><?php echo $_GET['pseudo']?></p>
<label  for="">mail</label><br>
<p name="mail"value="<?php echo $_GET['mail']?>" ><?php echo $_GET['mail']?></p>
<label  for="">role</label><br>
<!-- <input  type="text"name="role"value="<?php echo $_GET['role']?>" ><br><br> -->
<select name="couleur" style="width:300px;">

 <option value="admin">Admin</option>
 <option value="joueur">Joueur</option>
 <option value="editeur">Editeur</option>
</select>



<button type="submit" name="submit" class="btn btn-primary mx-2">envoyer</button><button formaction="adminchoix.php" class="btn btn-primary">annuler</button>

</div>
</form>
</body>
</html>


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