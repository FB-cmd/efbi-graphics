<?php
require("./scripts/addHead.php");
require("./scripts/addHeader.php");
require("./scripts/addContactMe.php");

$links = [
	"Accueil" => "./",
	"Présentation" => "./presentation/",
	"Services" => "./services/",
	"Portfolio" => "./portfolio/",
	"Tarifs" => "./tarifs/",
	"Blog" => "./blog/", 
	"Shopping" => "./shopping/",
];
$contactLink = "./contact/";
$assets = [ "./assets/icons/email.svg",
	"./assets/icons/phone.svg",
	"./assets/img/logo.svg",
	"./assets/icons/show-menu.svg",
	"./assets/img/banner.svg",
	"./assets/icons/facebook-icon.svg",
	"./assets/icons/instagram-icon.svg",
	"./assets/icons/linkedin-icon.svg",

];
$stylesheets= [ 
	"mainStyle" => "./css/main.css",
	"./css/reset.css",
	"./css/top-page.css",
	"./css/footer.css",
	"./css/contact-me.css",
];
$faviconLink = "./assets/icons/favicon.svg";
$description = "Désirez-vous concrétiser votre projet de publication ou mettre en valeur votre support de communication ? eFBi Graphics\U+000A9 vous offre le package complet de prestations PAO pour une création graphique et artistique originale et attractive. Réservez au plus vite pour bénéficier des avantages exclusifs !";
$keywords = [
	"graphiste PAO",
	"graphiste freelance",
	"graphiste independant",
	"graphiste indépendant",
	"sous-traitance",
	"sous traitance",
	"maquettiste indépendante",
	"maquettiste independante",
	"maquette",
	"maquette de livre",
	"outils PAO",
	"service de mise en page",
	"graphisme",
	"production graphique",
	"relecture professionnelle",
	"stylisme graphique",
	"design graphique",
	"conception graphique",
	"graphiste freelance",
	"fabrication livre",
	"conception graphique",
	"mise en page ouvrage",
	"relecture",
	"mise en page manuscrit",
	"mise en page texte",
];

addHead("", $faviconLink, $description, $keywords, $stylesheets);
addHeader($links, $contactLink, $assets);

echo <<<HTML
<img src="../assets/img/line-top-central.svg" alt="ligne du haut central" />
<h2 class="second-title">Bienvenue dans mon univers de création graphique&nbsp;! </h2>
<img class="open-book" src="../assets/img/open-book.svg" alt="image de livre ouvert" />
<img src="../assets/img/line-top-central.svg" alt="ligne du haut central" />
<h1 class="special-title">Pourquoi ce métier ?</h1>
<img class="why-job" src="../assets/icons/passion.svg" alt="icône de passion pour le métier" />
<h2>Passionnée du livre depuis l’enfance
	<br>
	Touchée par la magie de l’esthétique et de la création graphique
</h2>
<img class="why-job" src="../assets/icons/professional.svg" alt="icône d'orientation professionnelle pour le métier" />
<h2>Professionnelle, méthodique, rigoureuse et minutieuse
	<br>
	En quête de l’originalité et de la créativité 
</h2>
<img class="why-job" src="../assets/icons/goal.svg" alt="icône d'objectif pour le métier" />
<h2>Créer une trace unique et pertinente
	<br>
	Harmoniser contenu et esthétique
	<br>
	Embellir et faire distinguer  
</h2>
<img class="why-job" src="../assets/icons/collaboration.svg" alt="icône de collaboration pour le métier" />
<h2>Rencontrer, échanger et collaborer 
	<br>
	Construire et maintenir le lien social
</h2>
<div class="center-btn">
		<a href="./presentation">
					<button id="presentation-btn">Consulter la présentation</button>
		</a>
		</div>
		<hr class="horizontal-line" />		
<h1 class="special-title">Services</h1>
<img class="graphic-icon" src="../assets/icons/layout.svg" alt="icône de mise en page" />
<h2>Mise en page
	<p>	
	<span id="subtitle">Manuscrits divers&nbsp;: ouvrages, revues, romans, essais</span>
	<br>
	<span id="subtitle">Supports de communication&nbsp;: affiches, brochures, flyers, programmes de congrès</span>
	</p>	
</h2>
<img class="graphic-icon" src="../assets/icons/proofreading.svg" alt="icône de relecture" />
<h2>Relecture
	<p>
	<span id="subtitle">Relecture professionnelle</span>
	<br>
	<span id="subtitle">Correction intégrale</span>
	<br>
	<span id="subtitle">Suivi de fabrication</span>	
	</p>
	</h2>
<img class="graphic-icon" src="../assets/icons/illustration.svg" alt="icône d'illustration" />
<h2>Illustration	
	<p>
	<span id="subtitle">Dessins vectoriels, Illustrations, Schémas, Logotypes</span>
	</p>
	</h2>
<img class="graphic-icon" src="../assets/icons/photo.svg" alt="icône de photographie" />
<h2>Photographie	
	<p>
	<span id="subtitle">Prises de vue, Retouches, Traitement d’images, Adaptation print</span>
	</p>
	</h2>
<div class="btn-container">
		<a href="./services">
					<button id="services-btn" class="btn">Voir les services</button>
		</a>
		</div>
		<hr class="horizontal-line" />
		<h1 class="special-title">Pour qui ?</h1>
		<img class="graphic-icon" src="../assets/icons/edition.svg" alt="icône maison d'édition" />
		<h2>Maison d’édition</h2>
		<img class="graphic-icon" src="../assets/icons/editor.svg" alt="icône éditeur indépendant" />
		<h2>Éditeur indépendant</h2>
		<img class="graphic-icon" src="../assets/icons/com.svg" alt="icône agence de communication" />
		<h2>Agence de communication</h2>
		<img class="graphic-icon" src="../assets/icons/solo.svg" alt="icône client particulier" />
			<h2>Auteur, Particulier</h2>
		<div class="btn-container">
		<a href="./contact">
					<button id="quote-btn" class="btn">Demander un devis</button>
		</a>
		</div>
		<hr class="horizontal-line" />
		<div class="category">
		<h1 class="special-title">Portfolio</h1>
		</div>
		<div class="portfolio">
			<div class="works-container">
				<div class="carousel-track">
					<!-- Original set -->
					<img src="./assets/img/books-covers/cover-24.jpg" alt="Couverture de livre - Travail 24" loading="lazy">
					<img src="./assets/img/books-covers/cover-1.jpg" alt="Couverture de livre - Travail 1" loading="lazy"> 
					<img src="./assets/img/books-covers/cover-12.jpg" alt="Couverture de livre - Travail 12" loading="lazy"> 
					<img src="./assets/img/books-covers/cover-3.jpg" alt="Couverture de livre - Travail 3" loading="lazy">
					<img src="./assets/img/books-covers/cover-6.jpg" alt="Couverture de livre - Travail 6" loading="lazy">
					<img src="./assets/img/books-covers/cover-26.jpg" alt="Couverture de livre - Travail 26" loading="lazy">
					<!-- Duplicated set for seamless loop -->
					<img src="./assets/img/books-covers/cover-24.jpg" alt="Couverture de livre - Travail 24" loading="lazy">
					<img src="./assets/img/books-covers/cover-1.jpg" alt="Couverture de livre - Travail 1" loading="lazy"> 
					<img src="./assets/img/books-covers/cover-12.jpg" alt="Couverture de livre - Travail 12" loading="lazy"> 
					<img src="./assets/img/books-covers/cover-3.jpg" alt="Couverture de livre - Travail 3" loading="lazy">
					<img src="./assets/img/books-covers/cover-6.jpg" alt="Couverture de livre - Travail 6" loading="lazy">
					<img src="./assets/img/books-covers/cover-26.jpg" alt="Couverture de livre - Travail 26" loading="lazy">
				</div>
			</div>
		</div>
		<div class="btn-container">
		<a href="./portfolio">
					<button id="portfolio-btn" class="btn">Voir les travaux</button>
		</a>
		</div>
		<img id="personal-photo" src="./assets/img/profile-2.jpg" alt="Ma photo personnelle">
		<img src="../assets/img/line-top.svg" alt="ligne du haut encadrant la présentation" />
		<div class="presentation-text"> 
			<p>Je suis Fatima, la créatrice de votre futur projet&nbsp;!</p>
			<p>Ma passion pour l’art graphique me pousse à développer ma créativité en continu pour être à la hauteur de vos espérances.</p>
			<p>Mon expérience professionnelle me permet d’assurer des travaux de qualité qui sont bien appréciés par mes clients.</p> 
			<p>Je vous propose, au travers de mon site <strong>eFBi Graphics<sup>&copy;</sup></strong>, une aventure riche et constructive.</p>   
		</div>
		<img src="../assets/img/line-bottom.svg" alt="ligne du bas encadrant la présentation" />

HTML;
addContactMe($assets);

echo <<<HTML
		<footer>
			<span>Tous droits réservés - 2025 eFBi Graphics<sup>&copy;</sup></span>
		</footer>

		<script src="./scripts/common.js"></script>
		<script src="./scripts/responsive-menu.js"></script>
	</body>
</html>
HTML;

?>
