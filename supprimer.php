<?php 
    include 'database.php';

    $pdo = Database::connect();
        // interrogation BDD
            $sql = "delete from admistration where id=:code"; 
            $reponse = $pdo->prepare($sql);

   
    $code= $_GET["code"];

   
    $reponse->execute( array(":code"=>$code));


    header("location:admistration.php");
?>