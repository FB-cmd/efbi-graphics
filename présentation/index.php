<?php
require("../scripts/addHead.php");
require('../scripts/addHeader.php');
require('../scripts/addContactMe.php');
require('../scripts/links.php');
$linksArr["Présentation"] = "./";
$stylesheets["mainStyle"] = "../css/presentation.css";
$description = "Découvrez l'offre intégrale de mise en page et de conception graphique avec notre site propfessionnel eFBi Graphics\U+000A9 qui garantit la rapidité, l'efficacité, la créativité et la réactivité dans le traitement de vos commandes. Pour une expérience inédite !";  
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

addHead("Présentation", $faviconLink, $description, $keywords, $stylesheets);
addHeader($linksArr, $contactLink, $assets);

echo <<<HTML
<div class="about">
			<h1>A propos</h1>
			<div class="content">
				<p>
					<strong>eFBi Graphics<sup>&copy;</sup></strong> est votre meilleur choix pour commander  
					des prestations complètes de publication assistée par ordinateur (PAO). Il traite toute demande de conception graphique, de mise en page et de fabrication éditoriale. Il vous propose des
					services de qualité qui combinent créativité et rigueur professionnelle.
				</p>
				<p>
				<strong>eFBi Graphics<sup>&copy;</sup></strong> s’adresse à tout éditeur indépendant ou client particulier, à toute maison d’édition ou agence de communication, qui veulent sous-traiter des travaux de création graphique et de communication visuelle et publicitaire. 
				</p>
			</div>
		</div>
		<div class="values">
			<h1>Nos valeurs</h1>
			<img id="values-image" src="../assets/img/values.svg" alt="image de valeurs du site">
			<div class="content">
					<p>
						Par ses différents services,
						<strong>eFBi Graphics<sup>&copy;</sup></strong> s’appuie sur une approche collaborative dans le traitement des différents travaux, et cherche à faire véhiculer
						auprès de la clientèle cible une image crédible et transparente, fondée sur cinq piliers essentiels&nbsp;:
					</p>
					<ul>
						<li>Un haut niveau de <strong>Professionnalisme</strong>&nbsp;;</li>
						<li>
							Le <strong>Respect</strong> des normes appliquées dans la production
							graphique et artistique&nbsp;;
						</li>
						<li>
							Des <strong>Prestations</strong> sur mesure et adaptées aux besoins et
							attentes spécifiques de chaque client&nbsp;;
						</li>
						<li>
							Le <strong>Traitement</strong> rapide et efficace des commandes,
							l’exécution et la livraison dans les délais impartis&nbsp;;
						</li>
						<li>Le <strong>Sens</strong> élevé d’écoute et d’attention.</li>
					</ul>
			</div>
		</div>

		<div class="client-relation">
			<h1>Relation client et&nbsp;gestion&nbsp;des commandes</h1>
			<div class="content">
				<p>
					Le traitement de chaque demande passe d’abord par la phase de prise de contact et d'identification des détails de la commande. Dès validation de votre commande,
					vous serez amené(e) à nous fournir un bon de commande dûment rempli et signé.
				</p>
				<p>
					La réception des épreuves vous permet de suivre et de contrôler la forme
					et le contenu de votre publication / support, et de préparer les éventuelles
					modifications et corrections que nous allons intégrer et traiter. Dès validation
					finale du travail, nous allons vous préparer les fichiers imprimeurs.
				</p>
				<p>
					Le paiement de la prestation vous sera dû dès établissement de la facture
					relative au travail réalisé*.
				</p>
				<p>
					Même après livraison finale de la prestation, nous restons toujours à votre
					disposition en cas de besoin (modification mineure, demande de fichiers, etc.).
				</p>
				<p>
					<strong>eFBi Graphics<sup>&copy;</sup></strong> s’engage entièrement dans la
					transparence et la cohérence des opérations de gestion des commandes et de
					livraison.
				</p>

				<div class="notes">
					<span
						>* Paiement par virement bancaire à effectuer dans les 3 jours maximum suivant la date d’envoi de
						la facture, et avant la livraison des fichiers imprimeurs. Dans le cas de
						certains travaux longs ou complexes, un acompte sera exigé. 
						La totalité des frais de virement sera à votre charge.</span>
				</div>
			</div>
		</div>
HTML;
addContactMe($assets);

echo <<<HTML
		<footer>
			<span>Tous droits réservés - 2025 eFBi Graphics<sup>&copy;</sup></span>
		</footer>

		<script src="../scripts/common.js"></script>
		<script src="../scripts/responsive-menu.js"></script>
	</body>
</html>
HTML;

?>
