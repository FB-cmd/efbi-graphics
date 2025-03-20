<?php
function addContactMe(array $assets) {
	echo <<<HTML
		
		<div class="contact-me"> 
			<h3>Désirez-vous concrétiser votre projet de publication&nbsp;?</h3>
			<br>
			<br>
			<br>
			<div class="contact-me-message">
				<span>MERCI DE ME CONTACTER&nbsp;!</span>
			</div>
			<br>					
				<a class="email-infos" href="mailto:efbi-graphics@outlook.com" target="_blank">
					<img class="email-icon" src="${assets[0]}" alt="icone de mail en blanc"> 
					<span id="mail">efbi-graphics@outlook.com</span>
				</a>
			<div class="phone-infos">
				<img class="phone-icon" class="icon" src="${assets[1]}" alt="icone de téléphone en blanc">
				<span id="phone">(+212)6.99.37.92.12 </span>	
			</div>
			<br>
			<div class="contact-me-message">
				<span>Me suivre</span>
			</div>
			<br>
				</a>
			<a class="facebook-infos" href="https://www.facebook.com/share/1BfWtHS8my/?mibextid=qi2Omg" target="_blank">
					<img class="facebook-icon" src="${assets[5]}" alt="icone de facebook en blanc"> 
					<span id="facebook">EFBI Graphics</span>
				</a>
				<a class="instagram-infos" href="https://www.instagram.com/efbigraphics?igsh=Znk1YWg4bG1rdG5w" target="_blank">
					<img class="instagram-icon" src="${assets[6]}" alt="icone de instagram en blanc"> 
					<span id="instagram">efbigraphics</span>
				</a>
		</div>
		</div>
HTML;
}

?>
