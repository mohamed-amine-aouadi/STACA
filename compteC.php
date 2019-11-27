<?PHP
include "../config.php";
class clientC {
    function ajouterclient($client){
		$sql="insert into client (nom,prenom,telephone,email,mdp) values (:nom, :prenom,:telephone,:email,:mdp)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$client->getnom();
        $prenom=$client->getprenom();
        $telephone=$client->gettelephone();
        $email=$client->getemail();
        $mdp=$client->getmdp();
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':telephone',$telephone);
        $req->bindValue(':email',$email);
        $req->bindValue(':mdp',$mdp);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
    }
    function Email($email){

        $sql="SELECT email FROM client";
        $db = config::getConnexion();
        $erreurMail="";
        try{
        $stmt=$db->prepare($sql);
        
        $stmt->execute();
        while ($data =$stmt->fetch())
        {
        if ($email ==$data['email'] ) {


            $erreurMail= "E-mail Deja existant ";
        }
        }
        return $erreurMail;
    }
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }

 }
    public function Logedin($conn,$login,$pwd)
	{
		$req="select * from client   where email='$login' && mdp='$pwd'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}
    public static  function modifierClient($nom,$prenom,$telephone,$email,$mdp,$id)
{
    
     
     $db =config::getConnexion();
     
                $s=$db->prepare('UPDATE client SET nom=:nom,prenom=:prenom,telephone=:telephone,email=:email,mdp=:mdp where id=:id') ;
               
        $s->bindValue(':nom', $nom);
        $s->bindValue(':prenom', $prenom);
        $s->bindValue(':telephone', $telephone);
        $s->bindValue(':email',$email);
        $s->bindValue(':mdp',$mdp);
        $s->bindValue(':id',$id);
        

                 $s->execute();
              
    
     
} 
}


   



?>