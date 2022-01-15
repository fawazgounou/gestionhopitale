<?php 
try {
	$db =new PDO('mysql:host=localhost;dbname=prj_hopital','root','');	
} catch (PDOException $e){
	die('Erreur:'.$e->getMessage());
}
?>