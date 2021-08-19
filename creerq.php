<?php include 'database.php'; ?>
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
    <tr><td>Débutant</td> 
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
$i = 1;
for($i;$i<=10;$i++){
    echo "<tr><td>".$i."</td>";
    echo "<td><input type='text' name='quest$i' id=''></td>";
    echo "<td><input  type='text' name='anoec$i' id=''></td>";
    echo "<td><input class='w-100' type='text' name='choix1' id=''></td>";
    echo "<td><input class='w-100' type='text' name='choix2' id=''></td>";
    echo "<td><input class='w-100' type='text' name='choix3' id=''></td>";
    echo "<td><input class='w-100' type='text' name='choix4' id=''></td>";
    echo "<td><input class='w-100' type='text' name='rep$i' id=''></td></tr>";
    if (!empty($_POST["quest$i"]) && !empty($_POST["anoec$i"])&& !empty($_POST["rep$i"])&& isset($_POST['submit'])) {
        $pdo = Database::connect();
    $sql ="insert into question(id_difficulter,questions,reponse,anoecdote) values (1,:quest,:rep,:anoec)";
    $reponse = $pdo->prepare($sql);

   
    $quest = $_POST["quest$i"];
    $rep = $_POST["rep$i"];
    $anoec = $_POST["anoec$i"];

    $reponse->execute(array(":quest" => $quest,":rep" => $rep, ":anoec" =>  $anoec));
    }
}

    ?>
    <tr><td>Confirmé</td> 
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
$i = 1;
for($i;$i<=10;$i++) {
    echo "<tr><td>".$i."</td>";
    echo "<td><input type='text' name='quest1$i' id=''></td>";
    echo "<td><input  type='text' name='anoec1$i' id=''></td>";
    echo "<td><input class='w-100' type='text' name='choix1' id=''></td>";
    echo "<td><input class='w-100' type='text' name='choix2' id=''></td>";
    echo "<td><input class='w-100' type='text' name='choix3' id=''></td>";
    echo "<td><input class='w-100' type='text' name='choix4' id=''></td>";
    echo "<td><input class='w-100' type='text' name='rep1$i' id=''></td></tr>";
    if (!empty($_POST["quest1$i"]) && !empty($_POST["anoec1$i"])&& !empty($_POST["rep1$i"])&& isset($_POST['submit'])) {
        $pdo1 = Database::connect();
    $sql1 ="insert into question(id_difficulter,questions,reponse,anoecdote) values (2,:quest,:rep,:anoec)";
    $reponse1 = $pdo1->prepare($sql1);


    $quest1 = $_POST["quest1$i"];
    $rep1 = $_POST["rep1$i"];
    $anoec1 = $_POST["anoec1$i"];
    $reponse1->execute(array(":quest" => $quest1,":rep" => $rep1, ":anoec" =>  $anoec1));
}  
}
?>
   <tr><td>Expert</td> 
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
$i = 1;
for($i;$i<=10;$i++) {
    echo "<tr><td>".$i."</td>";
    echo "<td><input type='text' name='quest2$i' id=''></td>";
    echo "<td><input  type='text' name='anoec2$i' id=''></td>";
    echo "<td><input class='w-100' type='text' name='choix1' id=''></td>";
    echo "<td><input class='w-100' type='text' name='choix2' id=''></td>";
    echo "<td><input class='w-100' type='text' name='choix3' id=''></td>";
    echo "<td><input class='w-100' type='text' name='choix4' id=''></td>";
    echo "<td><input class='w-100' type='text' name='rep2$i' id=''></td></tr>";
    if (!empty($_POST["quest2$i"]) && !empty($_POST["anoec2$i"])&& !empty($_POST["rep2$i"])&& isset($_POST['submit'])) {
        $pdo1 = Database::connect();
    $sql1 ="insert into question(id_difficulter,questions,reponse,anoecdote) values (3,:quest,:rep,:anoec)";
    $reponse1 = $pdo1->prepare($sql1);


    $quest2 = $_POST["quest2$i"];
    $rep2 = $_POST["rep2$i"];
    $anoec2 = $_POST["anoec2$i"];
    $reponse1->execute(array(":quest" => $quest2,":rep" => $rep2, ":anoec" =>  $anoec2));
}  
}
?>
</table>
        <div class="py-3 d-flex justify-content-end me-5">
            <button type="submit" name="submit" class="btn-white btn-outline-primary">Validé</button>
        </div>
    </form>
    </body>
</html>
