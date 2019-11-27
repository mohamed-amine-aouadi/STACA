<?PHP
include "../config.php";
class clientC {
    function afficherClient ($client){
            echo"id:".$client->getId()."<br>";
            echo"nom:".$client->getNom()."<br>";
            echo "prenom:".$client->getPrenom()."<br>";
            echo "telephone:".$client->getTelephone()."<br>";
            echo "email:".$client->getEmail()."<br>";
        }
        function afficherClients(){
            //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
            $sql="SElECT * From client";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
    }
    function supprimerClient($id){
		$sql="DELETE FROM client where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
}
?>