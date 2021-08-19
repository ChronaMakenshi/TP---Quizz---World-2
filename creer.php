<?php 
include 'database.php';
if (empty($_COOKIE['pseudo']) OR empty($_COOKIE['password'])) {
    header('location:connexion.php?action=deconnecter');
   }
if(isset($_POST['submit'])&& !empty($_POST['titre'])&& !empty($_POST['theme'])){
    $pdo1 = Database::connect();
    // interrogation BDD
        $titre1=$_POST['titre'];
        $theme1=$_POST['theme'];
        


        $sql1 = "select * FROM admistration WHERE (titre=:titre  OR Theme=:theme)"; 
        $reponse1 = $pdo1->prepare($sql1);
        $reponse1->execute(array(":titre"=>$titre1,":theme"=>$theme1));

    // verification doublon dans BDD


    if ($reponse1->rowCount()==1) {
        header('location:creer.php');
    }else{

        $tmp_name = $_FILES['file']['tmp_name'];
        $name = $_FILES['file']['name'];
        // extention d'image
        
        $tabextention = explode('.', $name);
        $extention =strtolower(end($tabextention));

        $extentionauto = ['png', 'gif', 'jpg', 'jpeg'];
        if(in_array($extention, $extentionauto)){
            move_uploaded_file($tmp_name, './img/'.$name); // upload de l'image 
            // les envois des données 
            $pdo = Database::connect();
            // interrogation BDD
                $sql = "insert into admistration(titre,image,Theme) values (:titre,:nom_image,:theme)"; 
                $reponse = $pdo->prepare($sql);
        
            $titre =$_POST["titre"] ;
            $theme = $_POST["theme"];
            $name = $_FILES['file']['name'];
            $reponse->execute(array(":titre" => $titre, ":nom_image" => $name, ":theme" => $theme));
            header('Location: creerq.php'); 
            exit();
        }
        else{ 
            echo 'Mauvaise extension';
        }

    }

       
         
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
    <form method="POST" enctype="multipart/form-data">
    <div class="text-center">
        <h2 class="my-5">Céer un questionnaire</h2>
    </div>
    <div class="d-flex">
    <div class="mb-3 w-25 m-auto">
        <label for="exampleInputtheme" class="form-label">Titre du questionnaire</label>
        <input class="border w-100" type="text" name="titre" id="">
    </div>
    <div class="mb-3 w-25 m-auto">
        <label for="exampleInputtheme" class="form-label">Théme du questionnaire</label>
        <input class="border w-100" type="text" name="theme" id="">
    </div>
    <div class="mb-3 w-25 m-auto">
        <label for="exampleInputimage1" class="form-label">image du questionnaire</label>
        <input class="border w-100" type="file" name="file">
    </div> 
    </div> 

    <div class="py-3 d-flex  justify-content-end me-5">
    <button type="submit" name="submit" class="btn-white btn-outline-primary">Page suivante</button>
    </div>
</form>
    
</body>
</html>
