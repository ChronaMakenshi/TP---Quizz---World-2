<?php
include 'database.php';

    $pdo = Database::connect();
        // interrogation BDD
            $sql = "select * FROM admistration "; 
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
    <div class="d-flex flex-wrap bd-highlight mb-3">
      <h1 class="my-5 p-2 bd-highlight m-auto text-primary">Quizz World</h1>
      <a class="p-2 bd-highlight text-decoration-none" href="connexion.php?action=deconnecter">Déconnexion</a>
    </div>
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
    echo "<div id='web' class='card-body'>";
    echo "<div class='d-flex flex-row justify-content-evenly'>";
    echo "<input class='mt-3' value='débutant' type='radio' name='internet' id='color-1' checked />";
    echo "<label class='color-1' for='color-1'>Débutant</label>";
    echo "<input class='mt-3' value='confirmé' type='radio' name='internet' id='color-2'/>";
    echo "<label class='color-2' for='color-2'>Confirmé</label>";
    echo "<input class='mt-3' value='expert' type='radio' name='internet' id='color-3'/>";
    echo "<label class='color-3' for='color-3'>Expert</label>";
    echo "</div></div></div></div>";
    }
    echo "</div></div>"
    ?>
   

    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
