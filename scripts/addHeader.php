<?php
	
function addHeader(array $linksArr, $contactLink) {
echo <<<HTML
	<div class="line-top">
			<a href="mailto:fabirrou@outlook.com" target="_blank">
				<img class="icon" id="email-icon" src="../assets/icons/email.svg" alt="Îcone représentant un courrier qui redirige vers mon e-mail">
			</a>
			<div class="phone-infos-container">
				<img id="phone-icon" class="icon" src="../assets/icons/phone.svg" alt="Îcone représentant un téléphone qui copie mon numéro de téléphone dans votre presse-papier">
				<span id="phone-number"></span>
			</div>
		</div>
		<header>
			<img id="logo" src="../assets/img/logo.svg" alt="Logo du site">
				<div id="menu-container">
				<button id="activate-menu-btn">
				<img src="../assets/icons/show-menu.svg" id="show-menu-icon">
				</button>
			<menu>
HTML;

	foreach($linksArr as $section => $link):
		echo <<<HTML
			<a href="{$link}">{$section}</a>
		HTML;
	endforeach;

echo <<<HTML
</menu>
</div>
			<div class="left-side">
HTML;

echo <<<HTML
<a href=$contactLink>
					<button id="contact-btn">Contact</button>
				</a>
	</div>
</header>
HTML;

}


?>


