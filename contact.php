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
// 

// verif connection
public function connecte($Pseudo,$Mdp)
{
    $pdo = Database::connect();
    $pseudo=$this->test_input($Pseudo);
    
    // interrogation BDD
        $sql = "select * FROM inscription WHERE pseudo='$pseudo'"; 
        $reponse = $pdo->query($sql);
        $ligne = $reponse -> fetch();
            $mdp1= $ligne['mdp'];
             $role=$ligne['role'];
           
            $verif= password_verify($Mdp,$mdp1);
         // connection
    if ($reponse->rowCount()===1 && $verif===true) {
        if ($role==='null') {
            header('location:pageattend.php');
        }
        if ($role==='joueur') {
            header('location:quiz.php');
        }
        if ($role==='admin') {
            header('location:admin.php');
        }
        if ($role==='editeur'){
            header('location:creer');
        }

    }else{
    unset($_COOKIE['pseudo']);
    unset($_COOKIE['pass']);
    setcookie('pseudo','',time()-10);
    setcookie('password','',time()-10);
    }
}
// verif et injection
public function connecte_verif($pPseudo,$pMail,$pMdp){
    // recuperation des inputs
        $pseudo=$this->test_input($pPseudo);
        $mail=$this->test_input($pMail);
        $mdp=$this->test_input($pMdp);
        $pdo = Database::connect();
    // interrogation BDD
        $sql = "select * FROM inscription WHERE pseudo= :pseudo"; 
        $reponse = $pdo->prepare($sql);
        $reponse->execute(array(":pseudo"=>$pseudo));
    // verification doublon dans BDD
    if ($reponse->rowCount()==1) {
        header('location:connexion.php');
    }else{
        $sql="insert into inscription( pseudo, mail, mdp,role) VALUES (:pseudo,:mail,:mdp,'null')";
        $reponse=$pdo->prepare($sql);
        $reponse->execute(array(":pseudo"=>$pseudo,":mail"=>$mail,":mdp"=>$mdp));
        Database::disconnect();
        }
    }
}

















?>