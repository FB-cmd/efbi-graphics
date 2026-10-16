<?php 
require '../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

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
	$line1 = "Nom complet : {$infos["firstName"]} {$infos["lastName"]} \n";
	$line2 = "Email : {$infos["email"]} \n";
	$line3 = "Numéro de téléphone : {$infos["phoneNumber"]} \n";
	$line4 = "Code du pays : {$infos["countryCode"]} \n";
	$line5 = "Type de manuscript : {$infos["manuscriptType"]} \n";
	$line6 = "Nombre de mots : {$infos["wordNumber"]} \n";
	$line7 = "Nombre d'images : {$infos["imageNumber"]} \n";
	$line8 = "Nombre de tableaux : {$infos["tableNumber"]} \n";
	$line9 = "Message : {$infos["message"]} \n";
	$attachmentContent = implode("", [
		$line1,
		$line2,
		$line3,
		$line4,
		$line5,
		$line6,
		$line7,
		$line8,
		$line9,
	]);
	$smtpUsername = $_ENV["SMTP_USERNAME"];
	$smtpPassword = $_ENV["SMTP_PASSWORD"];

	if ($smtpUsername === false || $smtpUsername === "" || $smtpPassword === false || $smtpPassword === "") {
		error_log("Contact form email is not configured: SMTP_USERNAME and SMTP_PASSWORD must be set.");
		http_response_code(500);
		echo $smtpUsername ."The contact form is temporarily unavailable. Please try again later.";
		exit;
	}

	$filePath = tempnam(sys_get_temp_dir(), "contact-request-");
	if ($filePath === false) {
		error_log("Contact form email failed: could not create request attachment.");
		http_response_code(500);
		echo "Your request could not be sent. Please try again later.";
		exit;
	}
	if (file_put_contents($filePath, $attachmentContent) === false) {
		unlink($filePath);
		error_log("Contact form email failed: could not write request attachment.");
		http_response_code(500);
		echo "Your request could not be sent. Please try again later.";
		exit;
	}

	$mail = new PHPMailer(true);

	try {
		$mail->isSMTP();
		$mail->SMTPAuth = true;
		$mail->Host = "smtp.hostinger.com";
		$mail->Port = 465;
		$mail->Username = $smtpUsername;
		$mail->Password = $smtpPassword;
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;



		$mail->setFrom($smtpUsername, 'Mailer');
		$mail->addAddress('fabirrou@efbi-graphics.com', 'abc abc');
		$mail->Body    = 'New work is here!';
		$mail->addAttachment($filePath, "contact-request.txt");
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

	} catch (Exception $e) {
		error_log("Contact form email failed: {$mail->ErrorInfo}");
		http_response_code(500);
		echo "Your request could not be sent. Please try again later.";
	} finally {
		if (is_file($filePath) && !unlink($filePath)) {
			error_log("Contact form cleanup failed for temporary request attachment.");
		}
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
