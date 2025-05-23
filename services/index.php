<?php
require("../scripts/addHead.php");
require('../scripts/addHeader.php');
require('../scripts/addContactMe.php');
require('../scripts/links.php');

$linksArr["Services"] = "./";
$stylesheets["mainStyle"] = "../css/services.css";
$description = "Plongez dans l'univers de la conception graphique au travers de nos services sécialisés et de nos solutions sur mesure de mise en page, de création et de fabrication de sublimes publications et supports de communication !";
$keywords = [
	"offre graphiste",
	"services graphisme",
	"service graphisme",
	"mise en page",
	"service mise en page",
	"services mise en page",
	"mise en page manuscrit",
	"mise en page livre",
	"mise en page revue",
	"mise en page magazine",
	"mise en page photo",
	"mise en page texte",
	"service graphiste",
	"services graphiste",
	"retouche photo",
	"création graphique",
	"creation graphique",
	"dessin vectoriel",
	"support de communication",
	"création logo",
	"creation logo",
	"suivi de fabrication",
	"communication visuelle",
	"correction professionnelle",
	"création illustration",
	"creation illustration",
	"typographie",
	"Indesign",
	"Illustrator",
	"Photoshop",
	"style graphqiue",
	"traitement image",
];

addHead("Services", $faviconLink, $description, $keywords, $stylesheets);
addHeader($linksArr, $contactLink, $assets);

echo <<<HTML
<div class="layout">
			<h1>Mise en page et&nbsp;suivi&nbsp;de&nbsp;fabrication</h1>
			<div class="content">
				<p>
					<strong>eFBi Graphics<sup>&copy;</sup></strong> assure la mise en page
					professionnelle de tout type de manuscrit à l’aide des outils et applications de
					PAO les plus performants (InDesign, Illustrator, Photoshop). Il vous accompagne
					tout au long du processus de fabrication, de la première phase du choix de
					maquette, de styles graphiques, de couleurs, jusqu’à la dernière phase de mise
					en impression. Notre service de mise en page s’intéresse à l’harmonisation entre
					les différents éléments graphiques pour rendre la présentation plus attractive,
					le feuilletage et la lecture de votre publication plus faciles pour la cible de
					lecteurs visée.
				</p>
				<p>
				<strong>eFBi Graphics<sup>&copy;</sup></strong> vous propose en complément un
					service de correction pré-, en cours et post-fabrication. Que ce soit un ouvrage
					général ou spécialisé, revue scientifique, magazine, essai, roman,
					<strong>eFBi Graphics<sup>&copy;</sup></strong> met à votre disposition une
					bonne expertise, un sens élevé d’écoute et d’attention aux multiples détails,
					afin de soigner en toute rigueur la langue et l’expression de votre écrit.
				</p>
				<p>
					<strong>eFBi Graphics<sup>&copy;</sup></strong> vous offre des plans de suivi
					de fabrication en s’occupant de toutes les étapes de production et de contrôle des épreuves en collaboration directe avec l’auteur / le collectif d’auteurs ou tout autre
					intervenant.
				</p> 
			</div>
		</div>
		<img class="demonstration" src="../assets/img/demonstration-layout.jpg" alt="démonstration du service de la mise en page"/>
			<div class="correction">
				<h1>Relecture et correction intégrale des manuscrits</h1>
				<div class="content">
					<p>
						Pour optimiser la lisibilité, la crédibilité, la clarté et la fluidité de vos écrits et publications,
						<strong>eFBi Graphics<sup>&copy;</sup></strong> vous apporte de l’aide pour
						éliminer toute erreur, coquille et anomalie touchant l’orthographe, la
						syntaxe, la grammaire et la typographie.
					</p>
					<p>
						Par le biais d’un logiciel performant et spécialisé d’aide à la relecture et
						à la chasse aux fautes de langue (proofreading),
						<strong>eFBi Graphics<sup>&copy;</sup></strong> soigne le contenu de votre
						projet et le rend valide pour la lecture et cohérent avec les règles et
						normes de rédaction propres à chaque langue.
					</p>
					<p>
					Notre expérience dans le traitement de divers écrits (ouvrages, revues, textes littéraires, essais philosophiques, guides) portant sur une diversité de sujets et thèmes nous permet de développer des astuces et requêtes automatisées pour accélérer le processus de fabrication et parfaire le rendu de la publication.
					</p>
				</div>
			</div>
		</div>
		<img class="demonstration" src="../assets/img/demonstration-proofreading.jpg" alt="démonstration du service de relecture et correction"/>
		<div class="graphics">
			<h1>Création graphique et artistique et traitement d’images</h1>
			<div class="content">
				<p>
					La conception graphique, orientée vers la création de supports de communication visuelle, exige plus de créativité et de stylisme. Que ce soit un logotype, un dessin vectoriel ou autre document (affiche, brochure, dépliant, encart), <strong>eFBi Graphics<sup>&copy;</sup></strong> cherche à produire une présentation visible et attractive en faveur de votre image de marque.  
				</p>
				<p>
				En mettant « la simplicité » comme maître-mot et principe fondamental de conception graphique, <strong>eFBi Graphics<sup>&copy;</sup></strong> maintient l’échange minutieux et bienveillant avec le client durant la montée du projet. Les retours successifs et les remarques établies par le client sur les différentes épreuves et versions du travail nous apportent une aide précieuse. Nous favorisons dans ce service collaboration, écoute active et attention rigoureuse. 
				</p>
				<p><strong>eFBi Graphics<sup>&copy;</sup></strong>met également à votre disposition un service de photographie et de traitement d’images.   
				</p>
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
