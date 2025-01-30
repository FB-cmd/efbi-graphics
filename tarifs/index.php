<?php
require("../scripts/addHead.php");
require('../scripts/addHeader.php');
require('../scripts/links.php');
$linksArr["Tarifs"] = "./";
$stylesheets["mainStyle"] = "../css/prices.css";

addHead("Tarifs", $stylesheets, $scripts);
addHeader($linksArr, $contactLink, $assets, $scripts);

echo <<<HTML
<div class="layout">
			<h1>Mise en page</h1>
			<hr />
			<div class="content">
				<ul>
					<li>Texte brut : <strong>2 &#8364; / page</strong></li>
					<li>
						Texte illustré (création tableau, retouche image) :
						<strong>4 &#8364; / page</strong>
					</li>
					<li>Maquette originale de couverture : <strong>100 &#8364;</strong></li>
					<li>Maquette de couverture (modèle fourni) : <strong>60 &#8364;</strong></li>
					<li>Plusieurs modèles de couverture : <strong>30 &#8364; / modèle</strong></li>
					<li>Affiche publicitaire : <strong>100 &#8364;</strong>*</li>
					<li>
						Brochure, dépliant, programme de congrès, flyer :
						<strong>100 &#8364;</strong>*
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
						Relecture professionnelle et correction des manuscrits :
						<strong>2-5 &#8364; / page</strong>
					</li>
					<li>
						Intégration des corrections reçues (modifications mineures) :
						<strong>1 &#8364; / page</strong>*
					</li>
					<li>
						Intégration des corrections reçues (modifications importantes, rajouts de
						texte) : <strong>3-5 &#8364; / page</strong>*
					</li>
					<li>Suivi de fabrication : <strong>60 &#8364;</strong>**</li>
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
						Création graphique (illustration, schéma, graphique) :
						<strong>20 &#8364;</strong>
					</li>
					<li>Création logo : <strong>100 &#8364;</strong>*</li>
					<li>Dessin vectoriel : <strong>50-100 &#8364;</strong>*</li>
					<li>Retouches photo/image : <strong>2-3 &#8364;</strong>**</li>
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
	</body>
</html>
HTML;
?>
