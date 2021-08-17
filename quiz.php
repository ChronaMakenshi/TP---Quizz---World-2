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
    <?php
    while($ligne = $reponse -> fetch() ){
    echo "<a class='p-2 bd-highlight' href='creer.php'>Créer</a>";
    echo "<div class='all'>";
    echo "<div class='row row-col row-col-md-4 g-4 mb-5'>";
    echo "<div class='col'>";
    echo "<div class='card h-100 fond'>";
    echo "<h2 class='text-center'>Application Web</h2>";
    echo "<img src='img/web.jpg' class='m-auto' alt='...' />";
    echo "<div id='web' class='card-body'>";
    echo "<div class='d-flex justify-content-evenly'>";
    echo "<div class='d-flex flex-column'>";
    echo "<a class='bd-highlight' href='supprimer.php?code= ".$ligne['difficulter'].">Supprimer</a>";
    echo "<div><input value='débutant' type='radio' name='internet' id='color-1' checked />";
    echo "<label class='color-1' for='color-1'>Débutant</label>";
    echo "</div><a class='bd-highlight' href='editer.php'>Editer</a></div>";
    echo "<div class='d-flex flex-column'>";
    echo "<a class='bd-highlight' href='supprimer.php?code=".$ligne['difficulter'].">Supprimer</a>";
    echo "<div><input value='confirmé' type='radio' name='internet' id='color-2'/>";
    echo "<label class='color-2' for='color-2'>Confirmé</label>";
    echo "</div><a class='bd-highlight' href='editer.php'>Editer</a></div>";
    echo "<div class='d-flex flex-column'>";
    echo "<a class='bd-highlight' href='supprimer.php?code=".$ligne['difficulter'].">Supprimer</a>";
    echo "<div><input value="expert" type="radio" name="internet" id="color-3"/>
                <label class="color-3" for="color-3">Expert</label>
                </div>
                  <a class="bd-highlight" href="editer.php">Editer</a>
                </div>
                </div>
            </div>
          </div>
        </div>
</div>
    <!-- visuel de depart avec les theme -->

    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
