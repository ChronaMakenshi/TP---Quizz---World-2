<?php 
include_once 'database.php';
class contact{




    // creation construct du HTML
public function __construct(){
    
    }





    // test securiter
public function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


// verif et injection
public function connecte_verif($pPseudo,$pMail,$pMdp){
    // recuperation des inputs
        $pseudo=$this->test_input($pPseudo);
        $mail=$this->test_input($pMail);
        $mdp=$this->test_input($pMdp);
        $pdo = Database::connect();
    // interrogation BDD
        $sql = "select * FROM inscription WHERE pseudo= :pseudo AND  mail = :mail AND mdp =:mdp"; 
        $reponse = $pdo->prepare($sql);
        $reponse->execute(array(":pseudo"=>$pseudo,":mail"=>$mail,":mdp"=>$mdp));
    // verification doublon dans BDD+envoie du mail generer
    if ($reponse->rowCount()==1) {
        header('location:connexion.php');
    }else{
        $sql="insert into inscription( pseudo, mail, mdp) VALUES (:pseudo,:mail,:mdp)";
        $reponse=$pdo->prepare($sql);
        $reponse->execute(array(":pseudo"=>$pseudo,":mail"=>$mail,":mdp"=>$mdp));
        Database::disconnect();
        }
    }
}

















?>