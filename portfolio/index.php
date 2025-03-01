<?php
require("../scripts/addHead.php");
require('../scripts/addHeader.php');
require('../scripts/links.php');
$linksArr["Portfolio"] = "./";
$stylesheets["mainStyle"] = "../css/portfolio.css";
$description="eFBi Graphics\U+000A9 vous présente une sélection raffinée des travaux et réalisations effectués auprès des clients de renommée, témoignant de la diversité des supports et thématiques traités. Passez une commande au plus vite !"; 
$keywords = [];

addHead("Portfolio", $faviconLink, $description, $keywords, $stylesheets);
addHeader($linksArr, $contactLink, $assets);

echo <<<HTML
<div class="gallery">
<img
				class="cover"
				id="cover-1"
				src="../assets/img/books-covers/cover-1.jpg"
				alt="Couverture d'un travail" />
			<hr class="vertical" />
			<img
				class="cover"
				id="cover-2"
				src="../assets/img/books-covers/cover-2.jpg"
				alt="Couverture d'un travail" />
			<hr class="vertical" />
			<img
				class="cover"
				id="cover-3"
				src="../assets/img/books-covers/cover-3.jpg"
				alt="Couverture d'un travail" />
			<hr class="vertical" />
			<img
				class="cover"
				id="cover-4"
				src="../assets/img/books-covers/cover-4.jpg"
				alt="Couverture d'un travail" />
			<hr class="horizontal" id="hr1"/>
			<img
				class="cover"
				id="cover-5"
				src="../assets/img/books-covers/cover-5.jpg"
				alt="Couverture d'un travail" />
			<hr class="vertical" />
			<img
				class="cover"
				id="cover-6"
				src="../assets/img/books-covers/cover-6.jpg"
				alt="Couverture d'un travail" />
			<hr class="vertical" />
			<img
				class="cover"
				id="cover-7"
				src="../assets/img/books-covers/cover-7.jpg"
				alt="Couverture d'un travail" />
			<hr class="vertical" />
			<img
				class="cover"
				id="cover-8"
				src="../assets/img/books-covers/cover-8.jpg"
				alt="Couverture d'un travail" />
			<hr class="horizontal" id="hr2"/>
			<img
				class="cover"
				id="cover-9"
				src="../assets/img/books-covers/cover-9.jpg"
				alt="Couverture d'un travail" />
			<hr class="vertical" />
			<img
				class="cover"
				id="cover-10"
				src="../assets/img/books-covers/cover-10.jpg"
				alt="Couverture d'un travail" />
			<hr class="vertical" />
			<img
				class="cover"
				id="cover-11"
				src="../assets/img/books-covers/cover-11.jpg"
				alt="Couverture d'un travail" />
			<hr class="vertical" />
			<img
				class="cover"
				id="cover-12"
				src="../assets/img/books-covers/cover-12.jpg"
				alt="Couverture d'un travail" />
			<hr class="horizontal" id="hr3"/>
			<img
				class="cover"
				id="cover-13"
				src="../assets/img/books-covers/cover-13.jpg"
				alt="Couverture d'un travail" />
			<hr class="vertical" />
			<img
				class="cover"
				id="cover-14"
				src="../assets/img/books-covers/cover-14.jpg"
				alt="Couverture d'un travail" />
			<hr class="vertical" />
			<img
				class="cover"
				id="cover-15"
				src="../assets/img/books-covers/cover-15.jpg"
				alt="Couverture d'un travail" />
			<hr class="vertical" />
			<img
				class="cover"
				id="cover-16"
				src="../assets/img/books-covers/cover-16.jpg"
				alt="Couverture d'un travail" />
			<hr class="horizontal" id="hr4"/>
			<img
				class="cover"
				id="cover-17"
				src="../assets/img/books-covers/cover-17.jpg"
				alt="Couverture d'un travail" />
			<hr class="vertical" />
			<img
				class="cover"
				id="cover-18"
				src="../assets/img/books-covers/cover-18.jpg"
				alt="Couverture d'un travail" />
			<hr class="vertical" />
			<img
				class="cover"
				id="cover-19"
				src="../assets/img/books-covers/cover-19.jpg"
				alt="Couverture d'un travail" />
			<hr class="vertical" />
			<img
				class="cover"
				id="cover-20"
				src="../assets/img/books-covers/cover-20.jpg"
				alt="Couverture d'un travail" />
			<hr class="horizontal" id="hr5"/>
			<img
				class="cover"
				id="cover-21"
				src="../assets/img/books-covers/cover-21.jpg"
				alt="Couverture d'un travail" />
				<hr class="vertical" />
			<img
				class="cover"
				id="cover-24"
				src="../assets/img/books-covers/cover-24.jpg"
				alt="Couverture d'un travail" />
				<hr class="vertical" />
			<img
				class="cover"
				id="cover-25"
				src="../assets/img/books-covers/cover-25.jpg"
				alt="Couverture d'un travail" />
				<hr class="vertical" />
			<img
				class="cover"
				id="cover-26"
				src="../assets/img/books-covers/cover-26.jpg"
				alt="Couverture d'un travail" />
				<hr class="horizontal" id="hr5"/>
				<img
				class="cover"
				id="affiche-1"
				src="../assets/img/books-covers/affiche-1.jpg"
				alt="Affiche d'un congrès" />
				<hr class="vertical" />
				<img
				class="cover"
				id="affiche-2"
				src="../assets/img/books-covers/affiche-2.jpg"
				alt="Affiche d'un congrès" />
				<hr class="vertical" />
				<img
				class="cover"
				id="cover-27"
				src="../assets/img/books-covers/cover-27.jpg"
				alt="Couverture d'un travail" />
				<hr class="vertical" />
				<img
				class="cover"
				id="cover-28"
				src="../assets/img/books-covers/cover-28.jpeg"
				alt="Couverture d'un travail" />
				<hr class="horizontal" id="hr5"/>
				<img
				class="cover"
				id="cover-30"
				src="../assets/img/books-covers/cover-30.jpeg"
				alt="Couverture d'un travail" />
				<hr class="vertical" />
				<img
				class="cover"
				id="cover-31"
				src="../assets/img/books-covers/cover-31.jpeg"
				alt="Couverture d'un travail" />
				<hr class="vertical" />
				<img
				class="cover"
				id="cover-29"
				src="../assets/img/books-covers/cover-29.jpeg"
				alt="Couverture d'un travail" />
				<hr class="vertical" />
				<img
				class="cover"
				id="cover-32"
				src="../assets/img/books-covers/cover-32.jpeg"
				alt="Couverture d'un travail" />
				<hr class="horizontal" id="hr5"/>
				<img
				class="cover"
				id="layout-2"
				src="../assets/img/books-covers/layout-2.jpg"
				alt="Aperçu d'un travail personnel" />
				<hr class="vertical" />
				<img
				class="cover"
				id="layout-3"
				src="../assets/img/books-covers/layout-3.jpg"
				alt="Aperçu d'un travail personnel" />
				<hr class="horizontal" id="hr5"/>
				<img
				class="cover"
				id="cover-22"
				src="../assets/img/books-covers/cover-22.jpg"
				alt="Couverture d'un travail" />
			<hr class="horizontal" id="hr6"/>
			<img
				class="cover"
				id="layout-1"
				src="../assets/img/Cupcakes.jpg"
				alt="Aperçu d'une affiche de recette culinaire" />
				<hr class="vertical" />
			<img
				class="cover"
				id="new-year-card"
				src="../assets/img/books-covers/cover-23.jpg"
				alt="Couverture d'un travail" />
			
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
