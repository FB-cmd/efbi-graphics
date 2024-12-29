<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

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
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'https://fbcreations.org';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'fabirrou@outlook.com';                     //SMTP username
    $mail->Password   = 'gàigtjpd°009';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('fabirrou@outlook.com', 'Mailer');
    $mail->addAddress('fabirrou@outlook.com', 'abc abc');     //Add a recipient

    //Attachments
    $mail->addAttachment("/{$_POST["firstName"]}-{$_POST["lastName"]}.txt");         //Add attachments

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
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
