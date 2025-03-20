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
					<strong>eFBi Graphics<sup>&copy;</sup></strong> est un site professionnel dédié
					aux prestations PAO. Il traite toute demande de sous-traitance relative aux
					métiers graphiques d’édition et de communication visuelle. Il propose des
					services de qualité qui combinent créativité et rigueur professionnelle, afin de
					produire des supports attractifs au niveau stylistique et cohérents au niveau de
					contenu.
				</p>
				<p>
					<strong>eFBi Graphics<sup>&copy;</sup></strong> vous garantit des prestations
					rapides et efficaces qui répondent à vos attentes, en respectant les normes et
					exigences professionnelles.
				</p>
			</div>
		</div>
		<div class="values">
			<h1>Nos valeurs</h1>
			<img id="values-image" src="../assets/img/values.jpg" alt="image de valeurs du site">
			<div class="content">
				<div>
					<p>
						Par ses différents services,
						<strong>eFBi Graphics<sup>&copy;</sup></strong> cherche à faire véhiculer
						auprès de la clientèle une image crédible fondée sur&nbsp;:
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
		</div>

		<div class="client-relation">
			<h1>Relation client et gestion des commandes</h1>
			<div class="content">
				<p>
					<strong>eFBi Graphics<sup>&copy;</sup></strong> s’adresse à tout éditeur
					indépendant, maison d’édition, agence de communication et particulier, qui veut
					sous-traiter des travaux de mise en page, de fabrication, de création graphique
					et de communication visuelle et publicitaire. Le choix de notre offre de
					prestations personnalisées vous permet de diriger en toute autonomie la
					production de votre publication ou support de communication, d’échanger sur les
					phases de fabrication et d’intervenir pour effectuer toute modification
					nécessaire.
				</p>
				<p>
					Le traitement de chaque demande passe d’abord par une phase de prise de contact.
					Après le remplissage du formulaire de contact, un message électronique vous sera
					adressé dans les 48h suivant la réception de votre demande, clarifiant les
					points essentiels (nature du service, type de publication, maquette
					originale/modèle fourni, durée de travail, délai de fabrication, etc.) avec le
					devis joint qui correspond à la prestation. Dès validation de votre commande,
					vous serez amené à nous fournir un bon de commande dûment rempli et signé, qui
					porte le nom du prestataire (<strong>eFBi Graphics<sup>&copy;</sup></strong
					>), le numéro de commande, la date d’émission, les délais d’exécution et le
					tarif de la prestation.
				</p>
				<p>
					La réception des épreuves vous permet de suivre et de contrôler de près la forme
					et le contenu de votre publication / support, et de préparer les éventuelles
					modifications et corrections que nous allons intégrer et traiter. Dès validation
					finale du travail, nous allons vous préparer les fichiers imprimeurs.
				</p>
				<p>
					Le paiement de la prestation vous sera dû dès établissement de la facture
					relative au travail réalisé*. La facture détaille le(s) service(s) effectué(s),
					la référence de la prestation, le(s) tarif appliqué(s) (unitaire/forfaitaire),
					et la somme due, et le rappel des coordonnées bancaires.
				</p>
				<p>
					Le paiement se fait uniquement par virement bancaire**. Vous serez appelé à nous
					fournir un avis de virement comme preuve du règlement de la facture.
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
						>* Paiement à effectuer dans les 3 jours maximum suivant la date d’envoi de
						la facture, et avant la livraison des fichiers imprimeurs. Dans le cas de
						certains travaux longs ou complexes, un acompte sera exigé.</span
					>
					<br />
					<span>** La totalité des frais de virement sera à votre charge.</span>
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
