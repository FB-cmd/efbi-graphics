<?php
require("../scripts/addHead.php");
require('../scripts/addHeader.php');
require('../scripts/links.php');
$linksArr["Shopping"] = "./";
$stylesheets["mainStyle"] = "../css/shopping.css";

addHead("Shopping", $stylesheets, $scripts);
addHeader($linksArr, $contactLink, $assets, $scripts);

echo <<<HTML
<div class="soon">
			<img src="../assets/img/soon.svg" alt="soon image" />
		</div>

		<footer>
			<span>Tous droits réservés - 2025 eFBi Graphics<sup>&copy;</sup></span>
		</footer>

		<script src="../scripts/common.js"></script>
	</body>
</html>
HTML;
?>
