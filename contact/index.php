<?php
require("../scripts/addHead.php");
require('../scripts/addHeader.php');
require('../scripts/links.php');
$contactLink = "./";
$stylesheets["mainStyle"] = "../css/contact.css";
$stylesheets["phoneInputStyle"] = "https://cdn.jsdelivr.net/npm/intl-tel-input@25.2.0/build/css/intlTelInput.css";
$description="Cherchez-vous une conception graphique unique et créative ? Contactez-nous au plus vite pour se démarquer et gagner en visbilité !";  
$keywords = [
	"contact graphiste indépendant",
	"contact graphiste independant",
	"contact graphiste freelance",
	"remplir le formulaire",
	"contacter le service",
	"type de manuscrit",
	"nombre de pages",
	"conception graphique",
	"offre de services",
	"informations de contact",
	"prestation mise en page",
];

addHead("Contact", $faviconLink, $description, $keywords, $stylesheets);
addHeader($linksArr, $contactLink, $assets);

echo <<<HTML
<div class="profiles">
			<img src="../assets/img/profile-1.jpeg" id="profile-img" alt="photo de profil" />
		</div>
		<div class="welcome">
			<p><strong>Chère cliente, Cher client,</strong></p>
			<p>
				Je suis Fatima, la responsable de fabrication de votre futur projet de publication&nbsp;!
			</p>
			<p>
				Je suis là, à votre entière disposition, pour entamer ensemble une conception
				graphique digne d’intérêt, mettant en valeur votre écrit ou support de
				communication.
			</p>
			<p>
				Si vous désirez vivre une expérience riche et passionnante, je vous invite à me
				contacter directement par mail ou en remplissant le formulaire de contact ci-dessous
				pour échanger sur votre projet.
			</p>
			<div class="center">
				<p><strong>Une offre spéciale vous attend&nbsp;!</strong></p>
			</div>
			<div class="right">
				<p>A très bientôt&nbsp;!</p>
				<p class="italic">Fatima</p>
			</div>
		</div>

		<hr />

		<h1>Formulaire de contact</h1>

			<form action="../scripts/contact.php" method="POST">
				<h2>Informations de contact</h2>
				<div class="section" id="section-1">
					<div>
						<label for="first-name">Prénom</label>
						<input name="firstName" type="text" id="first-name" placeholder="Prénom" required />
					</div>

					<div>
						<label for="last-name">Nom</label>
						<input type="text" name="lastName" id="last-name" placeholder="Nom" required />
					</div>

					<div>
						<label for="email">Email</label>
						<input type="email" name="email" id="email" placeholder="abc@exemple.com" required />
					</div>

					<div>
						<label for="phone-number-field">Numéro de téléphone</label>
						<input type="tel" name="phoneNumber" id="phone-number-field" required />
					</div>
				</div>

				<h2>Informations de prestation</h2>
				<div class="section" id="section-2">
					<div>
						<label for="manuscript-type">Type de manuscrit</label>
						<select name="manuscriptType" id="manuscript-type" required >
							<option value="Livre">Livre</option>
							<option value="Revue">Revue</option>
							<option value="Revue">Texte littéraire</option>
							<option value="Revue">Essai</option>
							<option value="Revue">Autre</option>
						</select>
					</div>

					<div>
						<label for="word-number">Nombre de pages</label>
						<input type="number" min="0" name="wordNumber" id="word-number" required />
					</div>

					<div>
						<label for="image-number">Nombre d’images</label>
						<input type="number" min="0" name="imageNumber" id="image-number" required />
					</div>

					<div>
						<label for="table-number">Nombre de tableaux</label>
						<input type="number" min="0" name="tableNumber" id="table-number" required />
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
					spellcheck="off" 
					required></textarea>

				<br />

				<div class="center-btn">
					<input type="submit" value="Envoyer" />
				</div>
			</form>


		<footer>
			<span>Tous droits réservés - 2025 eFBi Graphics<sup>&copy;</sup></span>
		</footer>

		<script src="../scripts/common.js"></script>
		<script src="../scripts/responsive-menu.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.2.0/build/js/intlTelInput.min.js"></script>
		<script src="../scripts/contact.js"></script>
	</body>
</html>
HTML;
?>
