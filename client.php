<?PHP
class client{
	private $id;
	private $nom;
	private $prenom;
	private $telephone;
	private $email;
	private $mdp;
	function __construct($id,$nom,$prenom,$telephone,$email,$mdp){
		$this->id=$id;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->telephone=$telephone;
		$this->email=$email;
		$this->mdp=$mdp;
	}
	function getId(){
		return $this->id;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getTelephone(){
		return $this->telephone;
	}
	function getEmail(){
		return $this->email;
	}
	function getMdp(){
		return $this->mdp;
	}
	function setId($id){
		$this->id=$id;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom=$prenom;
	}
	function setTelephone($telephone){
		$this->telephone=$telephone;
	}
	function setEmail($email){
		$this->email=$email;
	}
	function setMdp($mdp){
		$this->mdp=$mdp;
	}
	
}
?>