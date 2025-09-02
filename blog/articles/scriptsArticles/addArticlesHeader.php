<?php
	
function addArticlesHeader(array $linksArr, $contactLink, array $assets) {
echo <<<HTML
<div class="line-top">
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


