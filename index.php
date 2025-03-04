<?php
require("./scripts/addHead.php");
require("./scripts/addHeader.php");
require("./scripts/addContactMe.php");

$links = [
	"Accueil" => "./",
	"Présentation" => "./présentation/",
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
	"./assets/img/banner.svg"
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
<h1 class="special-title"> Bienvenue dans notre univers&nbsp;! </h1>
<img class="open-book" src="../assets/img/open-book.svg" alt="livre ouvert" />
<img class="framing" src="../assets/img/line-top.svg" alt="ligne du dessous autour du texte de présentation" />
<div class="presentation">
		<div class="presentation-text">
			<p>
				<span>Ma passion pour le livre commence depuis très longtemps. La découverte du monde de la lecture dès l’enfance au travers des histoires, bandes dessinées et livres illustrés, me laissait toujours fascinée devant le pouvoir des caractères imprimés et des mots stylisés à animer l’imaginaire.</span>
				<br>
				<span>De plus en plus attachée à cette passion qui devient mon activité professionnelle, j’essaie de maintenir le lien avec ce monde fascinant et créatif et de laisser une trace unique et pertinente par la mise en page de divers documents (livres, revues scientifiques, affiches et autres), la relecture professionnelle, la création graphique et le traitement d'images.</span>
				<br>
				<span>L’idée de créer le site professionnel «&nbsp;<strong>eFBi Graphics<sup>&copy;</sup></strong>&nbsp;» traduit ma volonté d’être réactive sur le marché, de communiquer sur mon travail et de toucher une large cible. Cet espace vous invite à vivre une expérience riche et valorisante par la création collaborative de votre publication, et vous accompagne tout au long du processus de fabrication pour un rendu optimal.</span>
			</p>
		</div>
		</div>
		
			<img class="framing" src="../assets/img/line-bottom.svg" alt="ligne du dessous autour du texte de présentation" />
				<h1>Services</h1>

		<div class="services">
				<div id="service-1">
				<img class="graphic-illustrations" src="../assets/icons/layout.svg" alt="icône mise en page" />
				<h2>Mise en page</h2>	
				<p>	
					<span id="subtitle">Manuscrits divers&nbsp;: ouvrages, revues,</span>
					<br>
					<span id="subtitle">romans, essais</span>
					<br>
					<span id="subtitle">Supports de communication&nbsp;: affiches,</span>
					<br>
					<span id="subtitle">brochures, flyers,</span>
					<br>
					<span id="subtitle">programmes de congrès</span>
				</p>
				</div>

				<div id="service-2">
				<img class="graphic-illustrations" src="../assets/icons/proofreading.svg" alt="icône relecture" />
				<h2>Relecture</h2>
					<p>
						<span id="subtitle">Relecture professionnelle</span>
						<br>
						<span id="subtitle">Correction intégrale</span>
						<br>
						<span id="subtitle">Suivi de fabrication</span>	
					</p>
				</div>
				<div id="service-3">
				<img class="graphic-illustrations" src="../assets/icons/illustration.svg" alt="icône illustration" />
				<h2>Illustration</h2>	
				<p>
					<span id="subtitle">Dessins vectoriels, Illustrations,</span>
					<br>
					<span id="subtitle">Schémas, Logotypes</span>
					</p>
				</div>
				<div id="service-4">
				<img class="graphic-illustrations" src="../assets/icons/photo.svg" alt="icône photo" />
				<h2>Photographie</h2>	
				<p>
					<span id="subtitle">Prises de vue, Retouches,</span>
					<br>
					<span id="subtitle">Traitement d'images,</span>
					<br>
					<span id="subtitle">Adaptation print</span>
				</p>
				</div>
		</div>
		<div class="center-btn">
		<a href="./tarifs">
					<button id="price-btn">Voir les tarifs</button>
		</a>
		</div>
		<hr class="horizontal-line" />
		<h1>Cible</h1>
		<div class="targets">
		<div id="target-1">
		<img class="graphic-illustrations" src="../assets/icons/edition.svg" alt="icône maison d'édition" />
			<h2>Maison d'édition</h2>
		</div>
		<div id="target-2">
		<img class="graphic-illustrations" src="../assets/icons/editor.svg" alt="icône éditeur indépendant" />
			<h2>Éditeur indépendant</h2>
		</div>
		<div id="target-3">
		<img class="graphic-illustrations" src="../assets/icons/com.svg" alt="icône agence de communication" />
			<h2>Agence de communication</h2>
		</div>
		<div id="target-4">
		<img class="graphic-illustrations" src="../assets/icons/solo.svg" alt="icône particulier" />
			<h2>Particulier</h2>
		</div>
		</div>
		<div class="center-btn">
		<a href="./contact">
					<button id="quote-btn">Demander un devis</button>
		</a>
		</div>
		<hr class="horizontal-line" />
		<div class="category">
		<h1>Portfolio</h1>
		</div>
		<div class="portfolio">
			<div class="works-container">
				<img id="work1" src="./assets/img/books-covers/cover-1.jpg" alt="work1"> 
				<img id="work12" src="./assets/img/books-covers/cover-12.jpg" alt="work12"> 
				<img id="work3" src="./assets/img/books-covers/cover-3.jpg" alt="work3">
				<img id="work6" src="./assets/img/books-covers/cover-6.jpg" alt="work6"> 
			</div>
		</div>
		<div class="center-btn">
		<a href="./portfolio">
					<button id="portfolio-btn">Voir les travaux</button>
		</a>
		</div>
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
