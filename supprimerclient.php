<?PHP
include "../core/clientC.php";
$clientC=new clientC();
if (isset($_POST["id"])){
	$clientC->supprimerClient($_POST["id"]);
	header('Location: affichageclient.php');
}

?>