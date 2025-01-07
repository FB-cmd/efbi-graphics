<?php
require('../scripts/addHeader.php');

$linksArr = [
		"Accueil" => "../",
		"Présentation" => "../présentation/",
		"Services" => "../services/",
		"Portfolio" => "../portfolio/",
		"Tarifs" => "../tarifs/",
		"Blog" => "./",
		"Shopping" => "../shopping/",
	];
$contactLink = "../contact/";

echo <<<HTML
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>eFBI-graphics | Blog</title>
		<link rel="stylesheet" href="../css/reset.css" />
		<link rel="stylesheet" href="../css/top-page.css">
		<link rel="stylesheet" href="../css/blog.css" />
		<link rel="stylesheet" href="../css/footer.css" />
		<link rel="stylesheet" href="https://use.typekit.net/nql6qqc.css" />
	</head>

	<body>

HTML;

addHeader($linksArr, $contactLink);

echo <<<HTML
<div class="soon">
			<img src="../assets/img/soon.svg" alt="soon image" />
		</div>

		<footer>
			<span>Tous droits réservés - 2025 eFBi Graphics<sup>&copy;</sup></span>
		</footer>

		<script src="../scripts/common.js"></script>
	</body>
</html>
HTML;
?>
