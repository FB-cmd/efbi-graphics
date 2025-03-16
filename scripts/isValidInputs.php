<?php
function isValidInputs() {
	$firstName = $_POST["firstName"];
	$lastName = $_POST["lastName"];
	$email = $_POST["email"];
	$fullPhoneNumber = $_POST["fullPhoneNumber"];
	$countryCode = $_POST["countryCode"];
	$manuscriptType = $_POST["manuscriptType"];
	$wordNumber = $_POST["wordNumber"];
	$imageNumber = $_POST["imageNumber"];
	$tableNumber = $_POST["tableNumber"];
	$message = $_POST["message"];

		$inputs = [ $firstName, $lastName, $email, $fullPhoneNumber, $countryCode, $manuscriptType, $wordNumber, $imageNumber, $tableNumber, $message ];

		foreach ($inputs as $input) {
			if ($input === "") return false;
		}

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) return false;
	if (!is_numeric($wordNumber) || !is_numeric($imageNumber) || !is_numeric($tableNumber)) return false;

	return true;
}

?>
