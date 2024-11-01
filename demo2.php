<?php
$serveur = "localhost";
$user= "root";
$passwd = "root";
$bdd = "demo2";


	$connex = mysqli_connect($serveur, $user, $passwd, $bdd);
	
	if (mysqli_connect_errno()) 
	    die ("Echec de la connexion : ". mysqli_connect_error());
	
$sql = "SELECT nom,type,prix,
	JSON_VALUE(attr, '$.couleur') couleur,
	JSON_VALUE(attr, '$.type') type,
	JSON_VALUE(attr, '$.taille') taille,
	JSON_VALUE(attr, '$.description') description
	FROM example;
	";

    $result = mysqli_query($connex, $sql);  

	if (!$result)  die ("Probleme :  " . mysqli_error($connex));


$row=mysqli_fetch_object( $result);

echo "<pre>";
print_r($row);


mysqli_close($connex);

?>
