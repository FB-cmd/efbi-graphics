<?php
require('../scripts/addHeader.php');

$linksArr = [
		"Accueil" => "../",
		"Présentation" => "../présentation/",
		"Services" => "../services/",
		"Portfolio" => "./",
		"Tarifs" => "../tarifs/",
		"Blog" => "../blog/",
		"Shopping" => "../shopping/",
	];
$contactLink = "../contact/";

echo <<<HTML
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>eFBI-graphics | Portfolio</title>
		<link rel="stylesheet" href="../css/reset.css" />
		<link rel="stylesheet" href="../css/top-page.css">
		<link rel="stylesheet" href="../css/portfolio.css" />
		<link rel="stylesheet" href="../css/footer.css" />
		<link rel="stylesheet" href="https://use.typekit.net/nql6qqc.css" />
	</head>

	<body>
HTML;

addHeader($linksArr, $contactLink);

echo <<<HTML
<div class="gallery">
<img
				class="cover"
				id="cover-1"
				src="../assets/img/books-covers/cover-1.jpg"
				alt="Couverture d'un travail" />
			<hr class="vertical" />
			<img
				class="cover"
				id="cover-2"
				src="../assets/img/books-covers/cover-2.jpg"
				alt="Couverture d'un travail" />
			<hr class="vertical" />
			<img
				class="cover"
				id="cover-3"
				src="../assets/img/books-covers/cover-3.jpg"
				alt="Couverture d'un travail" />
			<hr class="vertical" />
			<img
				class="cover"
				id="cover-4"
				src="../assets/img/books-covers/cover-4.jpg"
				alt="Couverture d'un travail" />
			<hr class="horizontal" id="hr1"/>
			<img
				class="cover"
				id="cover-5"
				src="../assets/img/books-covers/cover-5.jpg"
				alt="Couverture d'un travail" />
			<hr class="vertical" />
			<img
				class="cover"
				id="cover-6"
				src="../assets/img/books-covers/cover-6.jpg"
				alt="Couverture d'un travail" />
			<hr class="vertical" />
			<img
				class="cover"
				id="cover-7"
				src="../assets/img/books-covers/cover-7.jpg"
				alt="Couverture d'un travail" />
			<hr class="vertical" />
			<img
				class="cover"
				id="cover-8"
				src="../assets/img/books-covers/cover-8.jpg"
				alt="Couverture d'un travail" />
			<hr class="horizontal" id="hr2"/>
			<img
				class="cover"
				id="cover-9"
				src="../assets/img/books-covers/cover-9.jpg"
				alt="Couverture d'un travail" />
			<hr class="vertical" />
			<img
				class="cover"
				id="cover-10"
				src="../assets/img/books-covers/cover-10.jpg"
				alt="Couverture d'un travail" />
			<hr class="vertical" />
			<img
				class="cover"
				id="cover-11"
				src="../assets/img/books-covers/cover-11.jpg"
				alt="Couverture d'un travail" />
			<hr class="vertical" />
			<img
				class="cover"
				id="cover-12"
				src="../assets/img/books-covers/cover-12.jpg"
				alt="Couverture d'un travail" />
			<hr class="horizontal" id="hr3"/>
			<img
				class="cover"
				id="cover-13"
				src="../assets/img/books-covers/cover-13.jpg"
				alt="Couverture d'un travail" />
			<hr class="vertical" />
			<img
				class="cover"
				id="cover-14"
				src="../assets/img/books-covers/cover-14.jpg"
				alt="Couverture d'un travail" />
			<hr class="vertical" />
			<img
				class="cover"
				id="cover-15"
				src="../assets/img/books-covers/cover-15.jpg"
				alt="Couverture d'un travail" />
			<hr class="vertical" />
			<img
				class="cover"
				id="cover-16"
				src="../assets/img/books-covers/cover-16.jpg"
				alt="Couverture d'un travail" />
			<hr class="horizontal" id="hr4"/>
			<img
				class="cover"
				id="cover-17"
				src="../assets/img/books-covers/cover-17.jpg"
				alt="Couverture d'un travail" />
			<hr class="vertical" />
			<img
				class="cover"
				id="cover-18"
				src="../assets/img/books-covers/cover-18.jpg"
				alt="Couverture d'un travail" />
			<hr class="vertical" />
			<img
				class="cover"
				id="cover-19"
				src="../assets/img/books-covers/cover-19.jpg"
				alt="Couverture d'un travail" />
			<hr class="vertical" />
			<img
				class="cover"
				id="cover-20"
				src="../assets/img/books-covers/cover-20.jpg"
				alt="Couverture d'un travail" />
			<hr class="horizontal" id="hr5"/>
			<img
				class="cover"
				id="cover-21"
				src="../assets/img/books-covers/cover-21.jpg"
				alt="Couverture d'un travail" />
			<hr class="vertical" />
			<img
				class="cover"
				id="cover-22"
				src="../assets/img/books-covers/cover-22.jpg"
				alt="Couverture d'un travail" />
			<hr class="horizontal" id="hr6"/>
		</div>

		<footer>
			<span>Tous droits réservés - 2025 eFBi Graphics<sup>&copy;</sup></span>
		</footer>

		<script src="../scripts/common.js"></script>
	</body>
</html>
HTML;
?>
