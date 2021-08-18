<?php
if (empty($_COOKIE['pseudo'])&& empty($_COOKIE['pass'])) {
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
    <title>Inscription au Quizz World</title>
</head>
<body class="text-primary">
        <a class="p-2 bd-highlight text-decoration-none d-flex justify-content-end" href="connexion.php">Connexion</a>
        <h1 class="my-5 p-2 bd-highlight text-center text-primary">Quizz World</h1>   
    <div class="p-2 bg-opacity">
    <form method="POST">
    <div class="text-center">
        <h2 class="my-5">Inscription au Quizz World</h2>
    </div>
    <div class="mb-3 w-25 m-auto">
        <label for="exampleInputPseudo1" class="form-label">Pseudo</label>
        <input type="text" class="form-control" name="pseudo" id="exampleInputPseudo1">
    </div> 
    <div class="mb-3 w-25 m-auto">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" name="mail" id="exampleInputEmail1">
    </div> 
    <div class="mb-3 w-25 m-auto">
        <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" name="mdp" id="exampleInputPassword1">
    </div>
    <div class="w-25 m-auto">
        <label for="exampleInputPassword2" class="form-label">Mot de passe à confirmé</label>
        <input type="password" class="form-control" name="mdp1" id="exampleInputPassword2">
    </div>
    <div class="py-3 w-25 m-auto">
    <button type="submit" name="submit" class="btn-white btn-outline-primary">Inscription</button>
    <a href="quiz.php">passage secret</a>
    </div>
</form>
    </div>
    <?php 
    include 'contact.php';
$form = new contact();
if (isset($_POST['submit'])) {
    if ($_POST['mdp']===$_POST['mdp1']) {
        $passCrypter=password_hash($_POST['mdp'],PASSWORD_DEFAULT,['cost'=>14]);
        $form->connecte_verif($_POST['pseudo'],$_POST['mail'],$passCrypter);
    }
}

    ?>
</body>
</html>