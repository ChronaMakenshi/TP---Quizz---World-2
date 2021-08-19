<?php include 'database.php';
if(isset($_POST['submit'])){
        
            $pdo = Database::connect();
            // interrogation BDD



            $quest = $_POST["quest"];
            $anoecdote = $_POST["anoecdote"];
            $reponse = $_POST["reponse"];
            $difficulter = $_POST["difficulte"];
                
            
            
            $sql = "insert into question(questions,reponse,anoecdote,id_difficulter) values (:question,:reponse,:anoecdote,:difficulter)"; 
            $reponse = $pdo->prepare($sql);
            $reponse->execute(array(":question" => $quest,":anoecdote" => $anoecdote,":reponse" => $reponse,":difficulter" => $difficulter));
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
    <title>Créer</title>
</head>
    <body class="text-primary">
        <div class="d-flex flex-wrap bd-highlight mb-3">
            <h1 class="m-3 p-2 bd-highlight m-auto">Quizz World</h1>
        </div>
        <div class="p-2 bg-opacity">
        <form method="POST">
        <div class="text-center">
            <h2 class="my-5">Céer un questionnaire</h2>
        </div>
        <div class="table-responsive">
    <table class="table  text-center m-auto table-striped table-primary">
    <tr>
        <td>numéro de question</td>
        <td>Question</td>
        <td>anoecdote</td>
        <td>choix un</td>
        <td>choix deux</td>
        <td>choix trois</td>
        <td>choix quatre</td>
        <td>reponse</td>
        <td>débutant</td> 
        <td>confirmé</td> 
        <td>expert</td>
   
<?php
 $tableau = [1];
 foreach ($tableau as $cle => $valeur) {
    echo "<tr><td>$valeur</td>";
    echo "<td><input type='text' name='quest' id=''></td>";
    echo "<td><input  type='text' name='anoecdote' id=''></td>";
    echo "<td><input class='w-100' type='text' name='choix1' id=''></td>";
    echo "<td><input class='w-100' type='text' name='choix2' id=''></td>";
    echo "<td><input class='w-100' type='text' name='choix3' id=''></td>";
    echo "<td><input class='w-100' type='text' name='choix4' id=''></td>";
    echo "<td><input class='w-100' type='text' name='reponse' id=''></td>";
    echo "<td><input type='radio' value='debutant' name='difficulte' id=''></td>";
    echo "<td><input type='radio' value='confirmme' name='difficulte' id=''></td>";
    echo "<td><input type='radio' value='expert' name='difficulte' id=''></td></tr>";
}
?>
</table>
        <div class="py-3 d-flex justify-content-end me-5">
            <button type="submit" name="submit" class="btn-white btn-outline-primary">Validé</button>
        </div>
    </body>
</html>