<?PHP
class client{
	private $nom;
	private $prenom;
	private $telephone;
	private $email;
	private $mdp;
	function __construct($nom,$prenom,$telephone,$email,$mdp){
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->telephone=$telephone;
		$this->email=$email;
		$this->mdp=$mdp;
	}
	function getnom(){
		return $this->nom;
	}
	function getprenom(){
		return $this->prenom;
	}
	function gettelephone(){
		return $this->telephone;
	}
	function getemail(){
		return $this->email;
	}
	function getmdp(){
		return $this->mdp;
	}

	function setnom($nom){
		$this->nom=$nom;
	}
	function setprenom($prenom){
		$this->prenom=$prenom;
	}
	function settelephone($telephone){
		$this->telephone=$telephone;
	}
	function setemail($email){
		$this->email=$email;
	}
	function setmdp($mdp){
		$this->mdp=$mdp;
	}
	
}
class adresse{
	private $nom;
	private $prenom;
	private $adr;
	private $postal;
	private $city;
	function __construct($nom,$prenom,$adr,$postal,$city){
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->adr=$adr;
		$this->postal=$postal;
		$this->city=$city;
	}
	function getnom(){
		return $this->nom;
	}
	function getprenom(){
		return $this->prenom;
	}
	function getadr(){
		return $this->adr;
	}
	function getpostal(){
		return $this->postal;
	}
	function getcity(){
		return $this->city;
	}

	function setnom($nom){
		$this->nom=$nom;
	}
	function setprenom($prenom){
		$this->prenom=$prenom;
	}
	function setadr($adr){
		$this->adr=$adr;
	}
	function setpostal($postal){
		$this->postal=$postal;
	}
	function setcity($city){
		$this->city=$city;
	}
	
}

?>