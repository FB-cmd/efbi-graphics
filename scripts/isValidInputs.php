<?php
function isValidInputs(array $infos) {
		foreach ($infos as $infoKey => $infoValue) {
			if ($infoValue === "") return false;
		}

	if (!filter_var($infos["email"], FILTER_VALIDATE_EMAIL)) return false;
	
	if (!is_numeric($infos["wordNumber"])) return false;
	if (!is_numeric($infos["imageNumber"])) return false;
	if (!is_numeric($infos["tableNumber"])) return false;

	return true;
}
?>
