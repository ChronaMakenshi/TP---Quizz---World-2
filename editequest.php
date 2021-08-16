<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style1.css">
    <title>Créer</title>
</head>
<body class="text-primary">
<div class="d-flex flex-wrap bd-highlight mb-3">
        <h1 class="m-3 p-2 bd-highlight m-auto">Quizz World</h1>
    </div>
    <div class="p-2 bg-opacity">
    <form method="POST">
    <div class="text-center">
        <h2 class="my-5">Éditer les questions</h2>
    </div>
    <div class="w-25 m-auto">
        <label for="exampleInputAnecdote" class="form-label">Anecdote</label>
        <input type="text" class="form-control" name="mdp1" id="exampleInputAnecdote">
    </div>
    <div class="d-flex flex-wrap justify-content-center mt-5">
    <div class="w-25 me-5">
        <label for="exampleInputReponse" class="form-label">Reponse 1</label>
        <input type="text" class="form-control" name="Reponse" id="exampleInputReponse">
        <input type="radio" name="bonnereponse" id="bonnereponse">Bonne réponse
    </div>
    <div class="w-25">
        <label for="exampleInputReponse" class="form-label">Reponse 2</label>
        <input type="text" class="form-control" name="Reponse2" id="exampleInputReponse">
        <input type="radio" name="bonnereponse" id="bonnereponse">Bonne réponse
    </div>
    </div>
    <div class="d-flex flex-wrap justify-content-center mt-2">
    <div class="w-25 me-5">
        <label for="exampleInputReponse" class="form-label">Reponse 3</label>
        <input type="text" class="form-control" name="Reponse3" id="exampleInputReponse">
        <input type="radio" name="bonnereponse" id="bonnereponse">Bonne réponse
    </div>
    <div class="w-25">
        <label for="exampleInputReponse" class="form-label">Reponse 4</label>
        <input type="text" class="form-control" name="Reponse4" id="exampleInputReponse">
        <input type="radio" name="bonnereponse" id="bonnereponse">Bonne réponse
    </div>
    </div>
    </div>
    <div class="py-3 d-flex justify-content-end me-5">
    <button type="submit" name="submit" class="btn-white btn-outline-primary">Page suivante</button>
    </div>
</form>
    
</body>
</html>