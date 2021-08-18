<?php
include 'database.php';

    $pdo = Database::connect();
        // interrogation BDD
            $sql = "SELECT * FROM `admistration` ORDER BY `id` ASC"; 
            $reponse = $pdo->query($sql);
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Quizz World</title>
  </head>
  <body class="m-auto">
      <a class="p-2 bd-highlight text-decoration-none d-flex justify-content-end" href="connexion.php?action=deconnecter">Déconnexion</a>
      <h1 class="my-5 p-2 bd-highlight text-center text-primary">Quizz World</h1>
    <a class="p-2 bd-highlight" href="creer.php">Créer</a>
    </div>
    <?php         
     
    echo "<div class='all'>";
    echo "<div class='row row-col row-col-md-4 g-4 m-auto'>";
    while($ligne = $reponse -> fetch() ){
    echo "<div class='col'>";
    echo "<div class='card h-100 fond'>";
    echo "<h2 class='text-center'>".$ligne["titre"]."</h2>";
    echo "<img src='img/".$ligne['image']."' class='m-auto' alt='...' />";
    echo "<div id='".$ligne["Theme"]."' class='card-body'>";
    echo "<div class='d-flex flex-row justify-content-evenly'>";
    echo "<input class='mt-3' value='débutant' type='radio' name='".$ligne["Theme"]."' id='".$ligne["id"]."'/>";
    echo "<label class='color-1' for='".$ligne["id"]."'>Débutant</label>";
    echo "<input class='mt-3' value='confirmé' type='radio' name='".$ligne["Theme"]."' id='".$ligne["id"]."'/>";
    echo "<label class='color-2' for='".$ligne["id"]."'>Confirmé</label>";
    echo "<input class='mt-3' value='expert' type='radio' name='".$ligne["Theme"]."' id='".$ligne["id"]."'/>";
    echo "<label class='color-3' for='".$ligne["id"]."'>Expert</label></div>";
    echo "</div></div></div>";
    }
  ?>
    </div>
  </div>
      <div class='all1'>
      <div class='bg-opacity text-primary' id='test1'></div>
      <div class='bg-opacity text-primary' id='test2'></div>
      <div id='test3' class='bg-opacity text-primary'></div>
        <button id='testbtn'>suivant</button>
        <button id='testbtn1'>suivant</button>
        <button id='btnaccueil'>Retour au Quizz World</button></div>
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
