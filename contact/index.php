<?php
require('../scripts/addHeader.php');

$linksArr = [
		"Accueil" => "../",
		"Présentation" => "../présentation/",
		"Services" => "../services/",
		"Portfolio" => "../portfolio/",
		"Tarifs" => "../tarifs/",
		"Blog" => "../blog/",
		"Shopping" => "../shopping",
	];
$contactLink = "./";

echo <<<HTML
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>eFBi-graphics | Contact</title>
		<link rel="stylesheet" href="../css/reset.css" />
		<link rel="stylesheet" href="../css/top-page.css">
		<link rel="stylesheet" href="../css/contact.css" />
		<link rel="stylesheet" href="../css/form.css" />
		<link rel="stylesheet" href="../css/footer.css" />
		<link rel="stylesheet" href="https://use.typekit.net/nql6qqc.css" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.2.0/build/css/intlTelInput.css">
	</head>
	<body>

HTML;

addHeader($linksArr, $contactLink);

echo <<<HTML
<div class="profiles">
			<img src="../assets/img/profile-1.jpeg" alt="photo de profil" />
		</div>
		<div class="welcome">
			<p><strong>Chère cliente, Cher client,</strong></p>
			<p>
				Je suis Fatima, la responsable de fabrication de votre futur projet de publication !
			</p>
			<p>
				Je suis là, à votre entière disposition, pour entamer ensemble une conception
				graphique digne d’intérêt, mettant en valeur votre écrit ou support de
				communication.
			</p>
			<p>
				La construction de mon site professionnel
				<strong>eFBi Graphics<sup>&copy;</sup></strong> vise à faire connaître mon activité
				et mes réalisations, ainsi qu'à structurer mon offre de services. Vous y trouverez
				de l'information nécessaire pour effectuer votre commande en toute sécurité et
				transparence. Certains menus seront actualisés prochainement (notamment le blog et
				le shopping).
			</p>
			<p>
				En combinant ma vive passion pour le graphisme et mon expérience professionnelle
				dans la création de beaux travaux (livres, revues, affiches, dessins, logos, etc.)
				auprès des éditeurs et particuliers, je vous offre, par l'intermédiaire de ce site,
				un package complet de solutions et services de PAO qui vous assure créativité,
				clarté, professionnalisme et visibilité.
			</p>
			<p>
				La collaboration autour d’un projet est une opportunité de rencontre humaine,
				d’échange et de partage d’idées. Mon approche consiste à construire des relations
				proches et durables avec mes clients, à satisfaire au mieux leurs attentes et à
				répondre à toute demande d’assistance ou de conseil, même après clôture de la
				commande.
			</p>
			<p>
				Si vous désirez vivre une expérience riche et passionnante, je vous invite à me
				contacter directement par mail ou en remplissant le formulaire de contact ci-dessous
				pour échanger sur votre projet.
			</p>
			<div class="center">
				<p><strong>Une offre spéciale vous attend !</strong></p>
			</div>
			<div class="right">
				<p>A très bientôt !</p>
				<p class="italic">Fatima</p>
			</div>
		</div>

		<hr />

		<h1>Formulaire de contact</h1>

		<div class="align-with-welcome">
			<form action="../scripts/contact.php" method="POST">
				<h2>Informations de contact</h2>
				<div class="section" id="section-1">
					<div>
						<label for="first-name">Prénom</label>
						<input name="firstName" type="text" id="first-name" placeholder="Prénom" required/>
					</div>

					<div>
						<label for="last-name">Nom</label>
						<input type="text" name="lastName" id="last-name" placeholder="Nom"required//>
					</div>

					<div>
						<label for="email">Email</label>
						<input type="email" name="email" id="email" placeholder="abc@exemple.com"required//>
					</div>

					<div>
						<label for="phone-number-field">Numéro de téléphone</label>
						<input type="tel" name="phoneNumber" id="phone-number-field"required//>
					</div>
				</div>

				<h2>Informations de prestation</h2>
				<div class="section" id="section-2">
					<div>
						<label for="manuscript-type">Type de manuscrit</label>
						<select name="manuscriptType" id="manuscript-type" required>
							<option value="Livre">Livre</option>
							<option value="Revue">Revue</option>
							<option value="Revue">Texte littéraire</option>
							<option value="Revue">Essai</option>
							<option value="Revue">Autre</option>
						</select>
					</div>

					<div>
						<label for="word-number">Nombre de mots</label>
						<input type="number" min="0" name="wordNumber" id="word-number"required/ />
					</div>

					<div>
						<label for="image-number">Nombre d'images</label>
						<input type="number" min="0" name="imageNumber" id="image-number"required/ />
					</div>

					<div>
						<label for="table-number">Nombre de tableaux</label>
						<input type="number" min="0" name="tableNumber" id="table-number"required/ />
					</div>
				</div>

				<h2>
					<label for="message">Message</label>
				</h2>
				<textarea
					id="message"
					name="message"
					autocomplete="off"
					autocorrect="off"
					spellcheck="off"required/></textarea>

				<br />

				<div class="center-btn">
					<input type="submit" value="Envoyer" />
				</div>
			</form>
		</div>


		<footer>
			<span>Tous droits réservés - 2025 eFBi Graphics<sup>&copy;</sup></span>
		</footer>

		<script src="../scripts/common.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.2.0/build/js/intlTelInput.min.js"></script>
		<script src="../scripts/contact.js"></script>
	</body>
</html>
HTML;
?>
