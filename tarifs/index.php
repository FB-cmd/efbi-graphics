<?php
require("../scripts/addHead.php");
require('../scripts/addHeader.php');
require('../scripts/links.php');
$linksArr["Tarifs"] = "./";
$stylesheets["mainStyle"] = "../css/prices.css";
$description="Avec notre offre spécialisée de services PAO, vous bénéficiez des tarifs les plus avantageux et des forfaits les mieux adaptés à vos attentes. eFBi Graphics\U+000A9 vous assure une tarification transparente et cohérente. Prenez contact rapidement !"; 

addHead("Tarifs", $faviconLink, $description, $stylesheets);
addHeader($linksArr, $contactLink, $assets);

echo <<<HTML
<div class="layout">
			<h1>Mise en page</h1>
			<hr />
			<div class="content">
				<ul>
					<li>Texte brut&nbsp;: <strong>2&nbsp;&#8364;&nbsp;/&nbsp;page</strong></li>
					<li>
						Texte illustré (création tableau, retouche image)&nbsp;:
						<strong>4&nbsp;&#8364;&nbsp;/&nbsp;page</strong>
					</li>
					<li>Maquette originale de couverture&nbsp;: <strong>100&nbsp;&#8364;</strong></li>
					<li>Maquette de couverture (modèle fourni)&nbsp;: <strong>60&nbsp;&#8364;</strong></li>
					<li>Plusieurs modèles de couverture&nbsp;: <strong>30 &#8364;&nbsp;/&nbsp;modèle</strong></li>
					<li>Affiche publicitaire&nbsp;: <strong>100&nbsp;&#8364;</strong>*</li>
					<li>
						Brochure, dépliant, programme de congrès, flyer&nbsp;:
						<strong>100&nbsp;&#8364;</strong>*
					</li>
				</ul>
				<div class="notes">
					<span
						>* Tarif de base. Le montant est variable en fonction de la complexité du
						travail.</span
					>
				</div>
			</div>
		</div>

		<div class="correction">
			<h1>Relecture, correction intégrale et suivi de fabrication</h1>
			<hr />
			<div class="content">
				<ul>
					<li>
						Relecture professionnelle et correction des manuscrits&nbsp;:
						<strong>2-5&nbsp;&#8364;&nbsp;/&nbsp;page</strong>
					</li>
					<li>
						Intégration des corrections reçues (modifications mineures)&nbsp;:
						<strong>1&nbsp;&#8364;&nbsp;/&nbsp;page</strong>*
					</li>
					<li>
						Intégration des corrections reçues (modifications importantes, rajouts de
						texte)&nbsp;: <strong>3-5&nbsp;&#8364;&nbsp;/&nbsp;page</strong>*
					</li>
					<li>Suivi de fabrication&nbsp;: <strong>60&nbsp;&#8364;</strong>**</li>
				</ul>
				<div class="notes">
					<span>* À l’ordre de 3 retours maximum.</span>
					<br />
					<span
						>** Cela concerne l’échange avec les auteurs (envoi des épreuves, réception
						des corrections, remplissage du tableau de suivi, réception du BAT
						final).</span
					>
				</div>
			</div>
		</div>

		<div class="graphics">
			<h1>Création graphique et traitement d’images</h1>
			<hr />
			<div class="content">
				<ul>
					<li>
						Création graphique (illustration, schéma, graphique)&nbsp;:
						<strong>20&nbsp;&#8364;</strong>
					</li>
					<li>Création logo&nbsp;: <strong>100&nbsp;&#8364;</strong>*</li>
					<li>Dessin vectoriel&nbsp;: <strong>50-100&nbsp;&#8364;</strong>*</li>
					<li>Retouches photo/image&nbsp;: <strong>2-3&nbsp;&#8364;</strong>**</li>
				</ul>
				<div class="notes">
					<span
						>* Tarif de base. Le montant est variable en fonction de la complexité du
						travail.</span
					><br />
					<span>** Selon la complexité des retouches.</span>
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
