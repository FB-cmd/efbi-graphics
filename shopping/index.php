<?php
require("../scripts/addHead.php");
require('../scripts/addHeader.php');
require('../scripts/links.php');
$linksArr["Shopping"] = "./";
$stylesheets["mainStyle"] = "../css/shopping.css";
$keywords = [];

addHead("Shopping", $faviconLink, $description, $keywords, $stylesheets);
addHeader($linksArr, $contactLink, $assets);

echo <<<HTML
<img src="../assets/img/line-top-central.svg" alt="ligne du haut central" />
<div class="product-card">
  <div>
    <img class="product-image" src="../assets/img/products/happy-day.svg" alt="Dessin d'un coeur en forme de ballon"/>
  </div>
  <div class="product-info">
    <h1> Ballon Happy Day</h1>
	<p>Un dessin vectoriel représentant un ballon en forme de cœur, avec l’expression « Happy Day ». Cette illustration évoque l’amour, la joie de vivre et les meilleurs vœux. Parfaite pour illustrer des cartes, des affiches ou des projets numériques festifs (créations joyeuses, romantiques ou décoratives), destinée principalement à l’impression (papeterie ou textile).</p>
	<p>Catégorie : Émotion / Amour / Célébration</p>
	<p>Format du fichier : SVG + PNG (300 DPI)</p>
	<p>Taille originale : 100 x 200 mm</p>
	<p>Catégorie : Émotion / Amour / Célébration</p>

    <p class="price">Prix : 20,00 €</p>
    <a href="contact.php?ref=ton-dessin1" class="btn">Commander</a>
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
