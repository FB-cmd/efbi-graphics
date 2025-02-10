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

<img class="framing" src="../assets/img/line-top.svg" alt="ligne du dessus autour du texte de présentation" />		
<div class="presentation">
		<div class="presentation-text">
			<p>
				<span>Ma passion pour le livre commence depuis très longtemps. La découverte du monde de la lecture dès l’enfance au travers des histoires, bandes dessinées et livres illustrés, me laissait toujours fascinée devant le pouvoir des caractères imprimés et des mots stylisés à animer l’imaginaire.</span>
				<br>
				<span>De plus en plus attachée à cette passion qui devient mon activité professionnelle, j’essaie de maintenir le lien avec ce monde fascinant et créatif par la mise en page de divers documents (livres, revues scientifiques, magazines, affiches et autres) et de laisser une trace unique et pertinente.</span>
				<br>
				<span>Avec la digitalisation de plus en plus prégnante des services et le déploiement des besoins en sous-traitance, et la nécessité de développer mon activité de graphiste PAO par la recherche de nouvelles opportunités de collaboration, l’idée de créer le site professionnel «&nbsp;<strong>eFBi Graphics<sup>&copy;</sup></strong>&nbsp;» traduit ma volonté d’être réactive sur le marché, de communiquer sur mon travail et de toucher une large cible. La nature du travail 100% distanciel implique de s’adapter aux exigences de présence digitale et de s’ouvrir au marché globalisé.</span>
				<br>
				<span>Par le haut professionnalisme, la créativité et le sens élevé de détails, avec le suivi avancé et personnalisé de la relation-client, <strong>eFBi Graphics<sup>&copy;</sup></strong> vous assure diverses prestations PAO destinées aux éditeurs, particuliers, agences de communication. Les services proposés comprennent&nbsp;:</span>
				<br>
			</p>

			<ul>
				<li>La mise en page&nbsp;;</li>
				<li>La relecture et la correction intégrale&nbsp;;</li>
				<li>Le suivi de fabrication&nbsp;;</li>
				<li>La création graphique et artistique&nbsp;;</li>
				<li>Le traitement d’images et d’illustrations.</li>
			</ul>

			<p>
			<span><strong>eFBi Graphics<sup>&copy;</sup></strong> vous invite à vivre une expérience riche et valorisante par la création collaborative de votre publication, et vous accompagne tout au long du processus de fabrication pour un rendu optimal.</span>
			</p>
		</div>
		</div>
		
			<img class="framing" src="../assets/img/line-bottom.svg" alt="ligne du dessous autour du texte de présentation" />
		
		<div class="illustraions-container">
			<img class="graphic-illustrations" src="../assets/icons/photo.svg" alt="icône photo" />
			<img class="graphic-illustrations" src="../assets/icons/illustration.svg" alt="icône illustration" />
			<img class="graphic-illustrations" src="../assets/icons/layout.svg" alt="icône mise en page" />
		</div>
		
		<div class="services">
			<div class="services-container">
				<div id="service-1">
					<p>
					<h2>Mise en page de différents manuscrits</h2>
						<hr id="orange-hr">
						<ul>
							<li>
								<span id="subtitle">Ouvrages généraux et spécialisés&nbsp;: </span>
								médecine, informatique, gestion, marketing &amp; communication, économie, droit, histoire &amp; géographie.
							</li>

							<li>
								<span id="subtitle">Revues, périodiques et magazines&nbsp;: </span>
								thématiques variées. 							
							</li>

							<li>
								<span id="subtitle">Publications littéraires, essais.</span>
							</li>

							<li>
								<span id="subtitle">Supports de communication&nbsp;: </span>
								affiches, brochures, dépliants, flyers, programmes de congrès, cartes.
							</li>
						</ul>
					</p>
				</div>

				<div id="service-2">
					<p>
						<h2>Relecture, correction et suivi de fabrication</h2>
						<hr id="orange-hr">
						<ul>
							<li>
								<span id="subtitle">Relecture et correction intégrale des manuscrits&nbsp;:</span>
								à l’aide du logiciel de correction professionnelle (erreurs d’orthographe, de syntaxe, de style et de sens, anomalies typographiques).
							</li>

							<li>
								<span id="subtitle">Intégration de corrections reçues&nbsp;:</span>
								traitement de corrections, modifications et rajouts de textes.
							</li>

							<li>
								<span id="subtitle">Suivi de fabrication&nbsp;:</span>
								auprès du client principal ou d’autres intervenants (auteur, correcteur), traçabilité des échanges et des fichiers.
							</li>
						</ul>
					</p>
				</div>

				<div id="service-3">
					<p>
						<h2>Création graphique et traitement d'images</h2>
						<hr id="orange-hr">
						<ul>
							<li>
								<span id="subtitle">Création graphique et artistique&nbsp;:</span>
								illustrations, graphiques, schémas.
							</li>

							<li>
								<span id="subtitle">Traitement d'images&nbsp;: </span>
								retouches simples et complexes, adaptation pour l'impression, optimisation du rendu des photos.
							</li>

							<li>
								<span id="subtitle">Dessins vectoriels créatifs&nbsp;: </span>
								dessins, logotypes, supports divers.
							</li>
						</ul>
					</p>
				</div>
			</div>
		</div>

		<div class="portfolio">
			<div class="works-container">
				<img id="work1" src="./assets/img/books-covers/cover-1.jpg" alt="work1"> 
				<img id="work12" src="./assets/img/books-covers/cover-12.jpg" alt="work12"> 
				<img id="work3" src="./assets/img/books-covers/cover-3.jpg" alt="work3">
				<img id="work6" src="./assets/img/books-covers/cover-6.jpg" alt="work6"> 
			</div>
		</div>

			<img src="./assets/img/books-covers/cover-23.jpg" id="new-year-card" alt="carte de voeux vous souhaitant une bonne année 2025">

		<div class="promotion">
			<h1>Envie de concrétiser votre projet de publication&nbsp;?</h1>
			<p>
				<span>Désirez-vous mettre en valeur votre prochaine publication ou votre support de communication avec un style visuel raffiné et une présentation originale&nbsp;?</span>
				<br>
				<span>Réservez votre place au plus vite et bénéficiez de <strong>10% de remise*</strong> sur votre première commande sur le site.</span>
			</p>
			<span id="note">* Applicable sur le montant total de la prestation. Offre valable jusqu’au 31 mars 2025.</span>
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
