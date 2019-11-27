<?php
include "../entities/client.php";
include "../core/compteC.php";

session_start();

     $clientC=new clientC();
     $clientC->modifierClient($_POST['nom_c'],$_POST['prenom_c'],$_POST['telephone_c'],$_POST['email_c'],$_POST['mdp_c'],$_SESSION['id_session']);
 
$sql="UPDATE  carte_fidelite set email=:email where  id_carte=:id";

$db=config::getConnexion();
       
            
             $req=$db->prepare($sql);
        $email_c=$_POST['email_c'];
        $req->bindValue(':email',$email_c);
        $req->bindValue(':id',$_SESSION['id_session']);
        $req->execute();

























        session_start();
        $_SESSION['email_session']=$_POST['email_c'];
		$_SESSION['pass_session']=$_POST['mdp_c'];
		$_SESSION['nom_session']=$_POST['nom_c'];
        $_SESSION['prenom_session']=$_POST['prenom_c'];
                $_SESSION['telephone_session']=$_POST['telephone_c'];	

    
    
    
    
    header('location:modifier.php');
     





?>
