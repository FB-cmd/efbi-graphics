<?php
function isValidInputs(array $infos) {
		foreach ($infos as $info) {
			if ($info === "") return false;
		}

	if (!filter_var($infos["email"], FILTER_VALIDATE_EMAIL)) return false;
	if (!is_numeric($infos["wordNumber"]) || !is_numeric($infos["imageNumber"]) || !is_numeric($infos["tableNumber"])) return false;

	return true;
}

?>
