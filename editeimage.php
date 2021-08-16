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
        <h2 class="my-5">Éditer le titre et l'image</h2>
    </div>
    <div class="d-flex">
    <div class="mb-3 w-25 m-auto">
        <label for="exampleInputtheme" class="form-label">Titre du questionnaire</label>
        <input type="text" class="form-control" name="theme" id="exampleInputtheme1">
    </div>
    <div class="mb-3 w-25 m-auto">
        <label for="exampleInputimage1" class="form-label">image du questionnaire</label>
        <input type="file" class="form-control" name="image" id="exampleInputimage1">
    </div> 
    </div>
    </div>
    <div class="py-3 d-flex justify-content-end me-5">
    <button type="submit" name="submit" class="btn-white btn-outline-primary">validé</button>
    </div>
</form>
</body>
</html>