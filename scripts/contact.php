<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';

$myfile = fopen("{$_POST["firstName"]}-{$_POST["lastName"]}.txt", "w") or die("Unable to open file!");

$line1 = "Nom complet : {$_POST["firstName"]} {$_POST["lastName"]} \n";
$line2 = "Email : {$_POST["email"]} \n";
$line3 = "Numéro de téléphone : {$_POST["fullPhoneNumber"]} \n";
$line4 = "Code du pays : {$_POST["countryCode"]} \n";
$line5 = "Type de manuscript : {$_POST["manuscriptType"]} \n";
$line6 = "Nombre de mots : {$_POST["wordNumber"]} \n";
$line7 = "Nombre d'images : {$_POST["imageNumber"]} \n";
$line8 = "Nombre de tableaux : {$_POST["tableNumber"]} \n";
$line9 = "Message : {$_POST["message"]} \n";

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
    $mail->setFrom('fabirrou@outlook.com', 'Mailer');
    $mail->addAddress('efbi-graphics@outlook.com', 'abc abc');

    $mail->Body    = 'New work is here!';
    $mail->addAttachment("./{$_POST["firstName"]}-{$_POST["lastName"]}.txt");

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

unlink("./{$_POST["firstName"]}-{$_POST["lastName"]}.txt");

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
