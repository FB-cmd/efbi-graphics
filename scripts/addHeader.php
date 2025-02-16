<?php
	
function addHeader(array $linksArr, $contactLink, array $assets) {
echo <<<HTML
	<div class="line-top">
				<a class="email-infos-container" href="mailto:efbi-graphics@outlook.com" target="_blank">
					<img class="email-icon" src="${assets[0]}" alt="Îcone représentant un courrier qui redirige vers mon e-mail">
					<span id="email">efbi-graphics@outlook.com</span>
				</a>
			<div class="phone-infos-container">
				<img class="phone-icon" src="${assets[1]}" alt="Îcone représentant un téléphone qui copie mon numéro de téléphone dans votre presse-papier">
				<span id="phone-number">+212699379212</span>
			</div>
		</div>
		<header>
			<img id="logo" src="${assets[2]}" alt="Logo du site">
				<div id="menu-container">
				<button id="activate-menu-btn">
				<img src="${assets[3]}" id="show-menu-icon">
				</button>
			<menu>
HTML;

	foreach($linksArr as $section => $link):
		echo <<<HTML
			<a href="{$link}">{$section}</a>
		HTML;
	endforeach;

echo <<<HTML
<a id="virtual-contact-btn" href=$contactLink>Contact</a>
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
<img id="banner" src="$assets[4]" alt="Bannière du site">
HTML;

}
?>


