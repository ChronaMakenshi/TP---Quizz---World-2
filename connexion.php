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
        <a class="p-2 bd-highlight text-decoration-none" href="index.php">Inscription</a>
    </div>
    <form class="p-2 bg-opacity" method="POST">
    <div class="text-center">
        <h2 class="my-5">Connexion au Quizz World</h2>
    </div>
    <div class="mb-3 w-25 m-auto">
        <label for="exampleInputEmail1" class="form-label">Pseudo</label>
        <input type="text" name="pseudo" class="form-control" id="exampleInputEmail1">
    </div> 
    <div class="mb-3 w-25 m-auto">
        <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
        <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="py-3 w-25 m-auto">
    <button type="submit" name="submit" class="btn-white btn-outline-primary">Connecté</button>
    </div>
</form>
<?php
include 'contact.php';

$form= new contact();
$mail=null;
$pass=null;
if (!empty($_GET['action'])&&$_GET['action']==='deconnecter') {
    unset($_COOKIE['pseudo']);
    unset($_COOKIE['pass']);
    setcookie('pseudo','',time()-10);
    setcookie('password','',time()-10);
}
if (!empty($_POST['pseudo'])AND!empty($_POST['pass'])) {
    setcookie('pseudo',$_POST['pseudo']);
    setcookie('password',$_POST['pass']);
}
$erreur = true;

if (isset($_POST['submit'])) {
    if (empty($_POST["pseudo"] && $_POST['pass'] ) ) {
        $msg = "Saisie obligatoire";
        $erreur = true;
        if ($erreur == true) {
            echo $msg;
        }
    }else{
        
        $form->connecte($_POST['pseudo'],$_POST['pass']);


    }
}
?>
</body>
</html>