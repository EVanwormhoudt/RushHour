<?php
//___________________________________________CONNEXION AU SERVEUR + VERIFICATION DES ACCENTS________________________________________________

	$link = mysqli_connect("127.0.0.1", "root", "" , "projet") ;
	if ($link == false)		// en cas d'erreur
	{
		echo "Erreur de connexion : " . mysqli_connect_errno() ;
		die();
	}
	if (!mysqli_set_charset($link, "utf8"))
	{
    	printf("Erreur lors du chargement du jeu de caractères utf8 : %s\n", mysqli_error($link));
    	exit();
	} 
?>