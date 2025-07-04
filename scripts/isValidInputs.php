<?php
function isValidInputs(array $infos) {
	$requiredFields = [ "firstName", "lastName", "email", "manuscriptType", "message", "wordNumber", "imageNumber", "tableNumber" ];
	$numericFields = [ "wordNumber", "imageNumber", "tableNumber" ];

	foreach ($requiredFields as $field) {
		if (empty($infos[$field])) return false;
	}

	if (!filter_var($infos["email"], FILTER_VALIDATE_EMAIL)) return false;

	foreach ($numericFields as $field) {
		if (!is_numeric($infos[$field])) {
			return false;
		}
	}

	return true;
}
