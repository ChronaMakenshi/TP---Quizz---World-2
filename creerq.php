<<<<<<< HEAD
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
=======
>>>>>>> a080e8d8d0e8fd6260a034309ea4fbf685ca97f5
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
       
        <div class="text-center">
            <h2 class="my-5">Céer un questionnaire</h2>
        </div>
        <div class="table-responsive">
        <form action="" method="POST">
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
        
   
<?php
 $tableau = [1,2,3,4,5,6,7,8,9,10];
 foreach ($tableau as $cle => $valeur) {
    echo "<tr><td>$valeur</td>";
    echo "<td><input type='text' name='quest' id=''></td>";
    echo "<td><input  type='text' name='anoec' id=''></td>";
    echo "<td><input class='w-100' type='text' name='choix1' id=''></td>";
    echo "<td><input class='w-100' type='text' name='choix2' id=''></td>";
    echo "<td><input class='w-100' type='text' name='choix3' id=''></td>";
    echo "<td><input class='w-100' type='text' name='choix4' id=''></td>";
    echo "<td><input class='w-100' type='text' name='rep' id=''></td>";
    echo "<td><input type='radio' name='diff' value='1' id='1'></td>";
    "<td><input type='radio' name='diff' value='2' id='2'></td>";
    "<td><input type='radio' name='diff' value='3' id='3'></td></tr>";
}
?>
<tr>
<td>numéro de question</td>
<td>Question</td>
<td>anoecdote</td>
<td>choix un</td>
<td>choix deux</td>
<td>choix trois</td>
<td>choix quatre</td>
<td>reponse</td>
<td>confirmé</td> 
<?php
$tableau = [1,2,3,4,5,6,7,8,9,10];
 foreach ($tableau as $cle => $valeur) {
    echo "<tr><td>$valeur</td>";
    echo "<td><input type='text' name='quest' id=''></td>";
    echo "<td><input  type='text' name='anoec' id=''></td>";
    echo "<td><input class='w-100' type='text' name='choix1' id=''></td>";
    echo "<td><input class='w-100' type='text' name='choix2' id=''></td>";
    echo "<td><input class='w-100' type='text' name='choix3' id=''></td>";
    echo "<td><input class='w-100' type='text' name='choix4' id=''></td>";
<<<<<<< HEAD
    echo "<td><input class='w-100' type='text' name='reponse' id=''></td>";
    echo "<td><input type='radio' value='debutant' name='difficulte' id=''></td>";
    echo "<td><input type='radio' value='confirmme' name='difficulte' id=''></td>";
    echo "<td><input type='radio' value='expert' name='difficulte' id=''></td></tr>";
=======
    echo "<td><input class='w-100' type='text' name='rep' id=''></td>";
    echo "<td><input type='radio' name='diff' value='2' id='2'></td>";
}
?>
<tr>
<td>numéro de question</td>
<td>Question</td>
<td>anoecdote</td>
<td>choix un</td>
<td>choix deux</td>
<td>choix trois</td>
<td>choix quatre</td>
<td>reponse</td>
<td>expert</td> 
<?php
$tableau = [1,2,3,4,5,6,7,8,9,10];
 foreach ($tableau as $cle => $valeur) {
    echo "<tr><td>$valeur</td>";
    echo "<td><input type='text' name='quest' id=''></td>";
    echo "<td><input  type='text' name='anoec' id=''></td>";
    echo "<td><input class='w-100' type='text' name='choix1' id=''></td>";
    echo "<td><input class='w-100' type='text' name='choix2' id=''></td>";
    echo "<td><input class='w-100' type='text' name='choix3' id=''></td>";
    echo "<td><input class='w-100' type='text' name='choix4' id=''></td>";
    echo "<td><input class='w-100' type='text' name='rep' id=''></td>";
    echo "<td><input type='radio' name='diff' value='3' id='3'></td></tr>";
>>>>>>> a080e8d8d0e8fd6260a034309ea4fbf685ca97f5
}
?>
</table>
        <div class="py-3 d-flex justify-content-end me-5">
            <button type="submit" name="submit" class="btn-white btn-outline-primary">Validé</button>
        </div>
    </form>
    <?php 
    include 'database.php';
if (isset($_POST['submit'])) {
    $pdo = Database::connect();
    $sql ="insert into question(id_difficulter,questions,reponse,anoecdote) values (:diff,:quest,:rep,:anoec)";
    $reponse = $pdo->prepare($sql);

    $diff = $_POST["diff"];
    $quest = $_POST["quest"];
    $rep = $_POST["rep"];
    $anoec = $_POST["anoec"];
    
    
    $reponse->execute(array(":diff" => $diff,":quest" => $quest,":rep" => $rep, ":anoec" =>  $anoec));
    header("location:creerq.php");
}
?>
    </body>
</html>
