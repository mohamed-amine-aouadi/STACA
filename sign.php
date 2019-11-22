<?php 

include 'config.php';

if (isset($_POST['valider']))
{
    $nom=$_POST['customer[first_name]'];
    $prenom=$_POST['customer[last_name]'];
    $telephone=$_POST['customer[Phone]'];
    $email=$_POST['customer[email]'];
    $pass=$_POST['customer[password]'];
    $pass2=$_POST['customer[passwordCNF]'];

    $stmt= new $bdd->prepare("INSERT INTO client(nom,prenom,telephone,email,mdp) VALUES(?,?,?,?,?)");
    $stmt->execute([$nom,$prenom,$telephone,$email,$pass]); 
 
}


?>




