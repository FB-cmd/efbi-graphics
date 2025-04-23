<?php
function isValidInputs(array $infos) {
	// Champs obligatoires
	$requiredFields = ["firstName", "lastName", "email", "manuscriptType", "message"];

	foreach ($requiredFields as $field) {
		if (empty($infos[$field])) {
			return false;
		}
	}

	// Email valide
	if (!filter_var($infos["email"], FILTER_VALIDATE_EMAIL)) {
		return false;
	}

	// Champs numériques : si remplis, doivent être des nombres
	$numericFields = ["wordNumber", "imageNumber", "tableNumber"];
	foreach ($numericFields as $field) {
		if ($infos[$field] !== "" && !is_numeric($infos[$field])) {
			return false;
		}
	}

	return true;
}
?>
