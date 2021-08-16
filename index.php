<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/">
    <link rel="stylesheet" href="css/style1.css">
    <title>Inscription au Quizz World</title>
</head>
<body class="text-primary">
    <div class="d-flex flex-wrap bd-highlight mb-3">
        <h1 class="m-3 p-2 bd-highlight m-auto">Quizz World</h1>
        <a class="p-2 bd-highlight text-decoration-none" href="connexion.php">Connexion</a>
    </div>
    <div class="p-2 bg-opacity">
    <form method="POST">
    <div class="text-center">
        <h2 class="my-5">Inscription au Quizz World</h2>
    </div>
    <div class="mb-3 w-25 m-auto">
        <label for="exampleInputPseudo1" class="form-label">Pseudo</label>
        <input type="text" class="form-control" id="exampleInputPseudo1">
    </div> 
    <div class="mb-3 w-25 m-auto">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1">
    </div> 
    <div class="mb-3 w-25 m-auto">
        <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="w-25 m-auto">
        <label for="exampleInputPassword2" class="form-label">Mot de passe à confirmé</label>
        <input type="password" class="form-control" id="exampleInputPassword2">
    </div>
    <div class="py-3 w-25 m-auto">
    <button type="button" class="btn-white btn-outline-primary">Inscription</button>
    <a href="quiz.php">passage secret</a>
    </div>
</form>
    </div>
</body>
</html>