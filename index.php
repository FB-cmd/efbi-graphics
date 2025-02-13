<?php
require("./scripts/addHead.php");
require("./scripts/addHeader.php");

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

<img class="framing" src="../assets/img/line-top.svg" alt="ligne du dessous autour du texte de présentation" />		
<div class="presentation">
		<div class="presentation-text">
			<p>
				<strong>Bienvenue dans mon univers&nbsp;!</strong>
					<br><br>	
				<span>Ma passion pour le livre commence depuis très longtemps. La découverte du monde de la lecture dès l’enfance au travers des histoires, bandes dessinées et livres illustrés, me laissait toujours fascinée devant le pouvoir des caractères imprimés et des mots stylisés à animer l’imaginaire.</span>
				<br>
				<span>De plus en plus attachée à cette passion qui devient mon activité professionnelle, j’essaie de maintenir le lien avec ce monde fascinant et créatif et de laisser une trace unique et pertinente par la mise en page de divers documents (livres, revues scientifiques, affiches et autres), la relecture professionnelle, la création graphique et le traitement d'images.</span>
				<br>
				<span>L’idée de créer le site professionnel «&nbsp;<strong>eFBi Graphics<sup>&copy;</sup></strong>&nbsp;» traduit ma volonté d’être réactive sur le marché, de communiquer sur mon travail et de toucher une large cible. Cet espace vous invite à vivre une expérience riche et valorisante par la création collaborative de votre publication, et vous accompagne tout au long du processus de fabrication pour un rendu optimal.</span>
			</p>
		</div>
		</div>
		
			<img class="framing" src="../assets/img/line-bottom.svg" alt="ligne du dessous autour du texte de présentation" />
			<div class="presentation">
		<div class="category">
				<h1>Services</h1>
				</div>
		<div class="illustraions-container">
			<img class="graphic-illustrations" src="../assets/icons/layout.svg" alt="icône mise en page" />
			<img class="graphic-illustrations" src="../assets/icons/proofreading.svg" alt="icône relecture" />
			<img class="graphic-illustrations" src="../assets/icons/illustration.svg" alt="icône illustration" />
			<img class="graphic-illustrations" src="../assets/icons/photo.svg" alt="icône photo" />
		</div>
		
		<div class="services">
			<div class="services-container">
				<div id="service-1">
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
				<h2>Illustration</h2>	
				<p>
					<span id="subtitle">Dessins vectoriels, Illustrations,</span>
					<br>
					<span id="subtitle">Schémas, Logotypes</span>
					</p>
					<div id="service-4">
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
		</div>
		<div class="category">
				<h1>Cible</h1>
				</div>
				<div class="illustraions-container">
			<img class="graphic-illustrations" src="../assets/icons/edition.svg" alt="icône maison d'édition" />
			<img class="graphic-illustrations" src="../assets/icons/editor.svg" alt="icône éditeur indépendant" />
			<img class="graphic-illustrations" src="../assets/icons/com.svg" alt="icône agence de communication" />
			<img class="graphic-illustrations" src="../assets/icons/solo.svg" alt="icône particulier" />
		</div>
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
		<div class="category">
				<h1>Galerie</h1>
				</div>

		<div class="contact-me">
			<h1>Envie de concrétiser votre projet de publication&nbsp;?</h1>
			<p>
			<span id="contact">Me contacter.</span>
			<br>
			<span id="mail"> Adresse mail.</span>
			<br>
			<span id="phone"> Téléphone.</span>
			</p>	
		</div>


		<footer>
			<span>Tous droits réservés - 2025 eFBi Graphics<sup>&copy;</sup></span>
		</footer>

		<script src="./scripts/common.js"></script>
		<script src="./scripts/responsive-menu.js"></script>
	</body>
</html>
HTML;

?>
