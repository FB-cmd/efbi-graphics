<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';
require("./isValidInputs.php");

$infos = [
	"firstName" => $_POST["firstName"],
	"lastName" => $_POST["lastName"],
	"email" => $_POST["email"],
	"phoneNumber" => $_POST["fullPhoneNumber"],
	"countryCode" => $_POST["countryCode"],
	"manuscriptType" => $_POST["manuscriptType"],
	"wordNumber" => $_POST["wordNumber"],
	"imageNumber" => $_POST["imageNumber"],
	"tableNumber" => $_POST["tableNumber"],
	"message" => $_POST["message"]
];

if (isValidInputs($infos)) {

	$fileName = "{$infos["firstName"]}-{$infos["lastName"]}.txt";
	$filePath = "./" . $fileName;
	$myfile = fopen($fileName, "w") or die("Unable to open file!");

	$line1 = "Nom complet : {$infos["firstName"]} {$infos["lastName"]} \n";
	$line2 = "Email : {$infos["email"]} \n";
	$line3 = "Numéro de téléphone : {$infos["phoneNumber"]} \n";
	$line4 = "Code du pays : {$infos["countryCode"]} \n";
	$line5 = "Type de manuscript : {$infos["manuscriptType"]} \n";
	$line6 = "Nombre de mots : {$infos["wordNumber"]} \n";
	$line7 = "Nombre d'images : {$infos["imageNumber"]} \n";
	$line8 = "Nombre de tableaux : {$infos["tableNumber"]} \n";
	$line9 = "Message : {$infos["message"]} \n";

	fwrite($myfile, $line1);
	fwrite($myfile, $line2);
	fwrite($myfile, $line3);
	fwrite($myfile, $line4);
	fwrite($myfile, $line5);
	fwrite($myfile, $line6);
	fwrite($myfile, $line7);
	fwrite($myfile, $line8);
	fwrite($myfile, $line9);
	fclose($myfile);

	$mail = new PHPMailer(true);

	try {
		$mail->isSMTP();
		$mail->SMTPAuth = true;
		$mail->Host = "smtp.hostinger.com";
		$mail->Port = 465;
		$mail->Username = "fatima@efbi-graphics.com";
		$mail->Password = "roqxo5-dojjyd-vydZug";
		$mail->SMTPSecure = "ssl";



		$mail->setFrom('fatima@efbi-graphics.com', 'Mailer');
		$mail->addAddress('fabirrou@efbi-graphics.com', 'abc abc');
		$mail->Body    = 'New work is here!';
		$mail->addAttachment($filePath);
		$mail->send();

		echo '<!DOCTYPE html>
			<html lang="fr">
			<head>
			<meta charset="UTF-8">
			<title>eFBi-graphics</title>
			</head>
			<body>
			<span>Votre demande a bien été reçue !</span>
			<br>
			<a href="../">Retour à l\'accueil</a>
			</body>
			</html>';

		unlink($filePath);



	} catch (Exception $e) {
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
} else {
	echo '<!DOCTYPE html>
		<html lang="fr">
		<head>
		<meta charset="UTF-8">
		<title>eFBi-graphics</title>
		</head>
		<body>
		<span>Un ou plusieurs champs sont invalide(s). Veuillez réessayer !</span>
		<br>
		<a href="../contact">Retour à la page de Contact</a>
		</body>
		</html>';
}

?>
