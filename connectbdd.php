<?php
	try {
		$bdd= new PDO('mysql:host=localhost; dbname=id4164067_blog; charset=utf8', 'id4164067_adminblog', 'Adm_blog');
	}

	catch(exeption $e) {
		die('erreur : ' . $e -> getMessage());
	}
?>
	