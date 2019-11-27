<?PHP
include "../core/adresseC.php";
$adresseC=new adresseC();
if (isset($_POST["id"])){
	$adresseC->supprimerAdresse($_POST["id"]);
	header('Location: affichageclient.php');
}

?>