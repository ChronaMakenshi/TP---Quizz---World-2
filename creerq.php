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
    <tr><td>débutant</td> 
    <?php echo "<td><input type='checkbox' name='diff' value='1' id='1'></td>";?>
    <tr>
        <td>numéro de question</td>
        <td>Question</td>
        <td>anoecdote</td>
        <td>choix un</td>
        <td>choix deux</td>
        <td>choix trois</td>
        <td>choix quatre</td>
        <td>reponse</td> 
<?php
<<<<<<< HEAD
 $tableau = [1,2];
 $i = 0;
 $max = count( $tableau );

 while ($i < $max) {
    echo "<tr><td>'.$array[ $i ].'</td>";
=======
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
    echo "<td><input class='w-100' type='text' name='rep' id=''></td>";
=======
    echo "<td><input class='w-100' type='text' name='rep'></td>";
>>>>>>> 63042d771f239ff29d2a93ce3a76fcc740753054
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
>>>>>>> 00a5fcb18d9e4a9b1b4d95bfe6617916a6be1ec4
    echo "<td><input type='text' name='quest' id=''></td>";
    echo "<td><input  type='text' name='anoec' id=''></td>";
    echo "<td><input class='w-100' type='text' name='choix1' id=''></td>";
    echo "<td><input class='w-100' type='text' name='choix2' id=''></td>";
    echo "<td><input class='w-100' type='text' name='choix3' id=''></td>";
    echo "<td><input class='w-100' type='text' name='choix4' id=''></td>";
    echo "<td><input class='w-100' type='text' name='rep' id=''></td></tr>";
}
?>


</table>
        <div class="py-3 d-flex justify-content-end me-5">
            <button type="submit" name="submit" class="btn-white btn-outline-primary">Validé</button>
        </div>
    </form>
 
    </body>
</html>
