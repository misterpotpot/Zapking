<?php
include_once 'Database.class.php';
include_once 'Url.class.php';
include_once 'User.class.php';


function get_urls($bdd)
{
	$query = "SELECT * FROM urls";
	$results = $bdd->query($query);
	$i = 0;
	$urls = new Array();
	while ($row = $results->fetchArray())
	{
		$urls[$i] = new Url($row['ID'], $row['href'], $row['categories'], $row['lectures'], $row['qs'], $row['qs_0'], $row['site'], $row['lang'], $row['date_push']);
		$i++;
	}

	return $urls;
}

function check_parametre($url_parametre, $user_parametre)
{
	$match = 0;
	$user_parametre = explode(";", $user_parametre);
	for ($i = 0; $i < count($user_parametre); $i++)
	{
		if (stripos($url_parametre, $user_parametre[$i]) != false)
			$match = 1;
	}

	return $match;
}

function choix_urls($nb, $user, $urls)
{
	$j = 0;

	for ($i = 0; $i < count($ID); $i++)
	{
		$url = $urls[$i]
		if (check_parametre($url->get_categories(), $user->get_preferences_categories()) == 0) // Si catégorie de l'url n'est pas dans les préférences catégorie du user
			break;
		if (check_parametre($url->get_site(), $user->get_preferences_site()) == 0) // Si le site de l'url n'est pas dans les préférences site du user
			break;
		if (check_parametre($url->get_href(), $user->get_urls_vu()) == 1) // Si l'url a déjà été vu par le user
			break;
		if (check_parametre($url->get_lang(), $user->get_lang()) == 0) // Si langue l'url n'est pas dans les langues du user
			break;
		$resultats[$j] = $url;
		$j++;
	}
	return "test";
}





$erreur = "";

if (isset($_GET['key']) && isset($_GET['nb']))
{
	$key = htmlspecialchars($_GET['key']);
	$nb = htmlspecialchars($_GET['nb']);
}
else
	$erreur = "Echec de la requête : il manque des paramètres";

$bdd = new Database('zapking.db');
if(!$bdd)
	$erreur = $db->lastErrorMsg();


if ($erreur == "")
{
	$user = new User($key, $bdd);
	if(!$user)
	{
		$output = $user->lastErrorMsg();
		break;
	}
	$urls = get_urls($bdd);
	$output = choix_urls($nb, $user, $urls);
}
else
	$output = $erreur;

echo $output;
