<?php 
try {
$bdd= new PDO("mysql:host=localhost;dbname=staca", "root", "");

}catch (exeption $e){
    echo $e->getMessage();
}

?>
