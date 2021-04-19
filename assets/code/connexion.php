<?php

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=tricatel;charset=utf8', 'root', 'root',
		PDO::ERRMODE_EXCEPTION));
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}
	
	$result = $bdd->query("SELECT * FROM utilisateur");
	
	print_r($result->fetch());

?>


<?php 
	
	$req = $bdd->prepare('SELECT id, mot_de_passe FROM utilisateur WHERE nom = :nom');
	$req->execute(array(
		'nom' => $nom));
	$resultat = $req->fetch();
	
	$isPasswordCorrect = password_verify($_POST['mot_de_passe'], $resultat['mot_de_passe']);
	
	if (!$resultat)
		{
			echo 'Mauvais identifiant ou mot de passe !';
		}
	else
		{
			if ($isPasswordCorrect) {
				session_start();
				$_SESSION['id'] = $resultat['id'];
				$_SESSION['pseudo'] = $nom;
				echo 'Vous êtes connecté !';
			}
			else {
				echo 'Mauvais identifiant ou mot de passe !';
			}
		}
	
?>