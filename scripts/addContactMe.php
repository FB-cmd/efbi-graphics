<?php
function addContactMe(array $assets) {
	echo <<<HTML
		
		<div class="contact-me"> 
			<h3>Désirez-vous concrétiser votre publication / support de communication&nbsp;?</h3>
			<br>
			<br>
			<br>
			<div class="contact-me-message">
				<span>MERCI DE ME CONTACTER&nbsp;!</span>
			</div>
			<br>
			<br>
			<div class="email-infos">
				<img id="email-icon-2" src="${assets[0]}" alt="icone de mail en blanc"> 
				<span id="mail"> Adresse mail&nbsp;: efbi-graphics@outlook.com</span>
			</div>
			<br>
			<div class="phone-infos">
				<img id="phone-icon-2" class="icon" src="${assets[1]}" alt="icone de téléphone en blanc">
				<span id="phone"> Téléphone&nbsp;: (+212)6.99.37.92.12 </span>
			</div>
		</div>
		</div>
HTML;
}

?>
