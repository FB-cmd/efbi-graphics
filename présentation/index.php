<?php
require("../scripts/addHead.php");
require('../scripts/addHeader.php');
require('../scripts/links.php');
$linksArr["Présentation"] = "./";
$stylesheets["mainStyle"] = "../css/presentation.css";

addHead("Présentation", $faviconLink, $description, $stylesheets);
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

				<div>
					<p>Les services fournis par ce site concernent&nbsp;:</p>
					<ul>
						<li>
							La mise en page de différents textes et manuscrits (ouvrages généraux et
							spécialisés, revues et périodiques, publications littéraires, essais,
							etc.)&nbsp;;
						</li>
						<li>
							La relecture et la correction professionnelle de l’intégralité des
							manuscrits (erreurs d’orthographe, de grammaire, de sens et de style,
							gestion des anomalies typographiques)&nbsp;;
						</li>
						<li>Le suivi de fabrication avec le client&nbsp;;</li>
						<li>
							La création graphique et artistique : dessins vectoriels, illustrations,
							logos&nbsp;;
						</li>
						<li>Le traitement d’images et les retouches photos.</li>
					</ul>
				</div>

				<p>
					<strong>eFBi Graphics<sup>&copy;</sup></strong> vous garantit des prestations
					rapides et efficaces qui répondent à vos attentes, en respectant les normes et
					exigences professionnelles.
				</p>
			</div>
		</div>

		<div class="values">
			<h1>Nos valeurs</h1>
			<div class="content">
				<div>
					<p>
						<strong>eFBi Graphics<sup>&copy;</sup></strong> s’appuie sur quatre valeurs
						de travail essentielles&nbsp;:
						<strong>rapidité, efficacité, créativité, réactivité.</strong>
					</p>
					<ul>
						<li>
							<strong>RAPIDITÉ&nbsp;:</strong> fournir une expérience client rapide et
							rationalisée compte tenu des besoins et attentes spécifiques et des
							délais accordés pour traiter la commande (rapidité d’exécution et de
							livraison).
						</li>
						<li>
							<strong>EFFICACITÉ&nbsp;:</strong> produire des prestations de meilleure
							qualité par l’exploitation optimale des différentes fonctionnalités
							fournies par les applications PAO, tout en les adaptant à la nature du
							support fabriqué.
						</li>
						<li>
							<strong>CRÉATIVITÉ&nbsp;:</strong> maintenir un style créatif et personnalisé
							dans chaque production graphique et appliquer une touche artistique
							originale et unique.
						</li>
						<li>
							<strong>RÉACTIVITÉ&nbsp;:</strong> créer du lien durable avec le client en
							enrichissant l’échange et le partage tout au long du processus de
							fabrication, et renforcer la relation client avec des services
							complémentaires, des promotions et des offres spéciales.
						</li>
					</ul>
				</div>

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

		<footer>
			<span>Tous droits réservés - 2025 eFBi Graphics<sup>&copy;</sup></span>
		</footer>

		<script src="../scripts/common.js"></script>
		<script src="../scripts/responsive-menu.js"></script>
	</body>
</html>
HTML;

?>
