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

}
class adresseC {
    function ajouteradresse($adresse){
		$sql="insert into adresse (nom,prenom,adr,postal,city) values (:nom,:prenom,:adr,:postal,:city)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$adresse->getnom();
        $prenom=$adresse->getprenom();
        $adr=$adresse->getadr();
        $postal=$adresse->getpostal();
        $city=$adresse->getcity();

		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':adr',$adr);
        $req->bindValue(':postal',$postal);
        $req->bindValue(':city',$city);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

}

?>