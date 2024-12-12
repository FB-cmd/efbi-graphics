<?php 
$myfile = fopen("{$_POST["firstName"]}-{$_POST["lastName"]}.txt", "w") or die("Unable to open file!");

$line1 = "Nom complet : {$_POST["firstName"]} {$_POST["lastName"]} \n";
$line2 = "Email : {$_POST["email"]} \n";
$line3 = "Numéro de téléphone : {$_POST["phoneNumber"]} \n";
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

echo "La demande a bien été reçue!";

sleep(5);

header("Location: https://fbcreations.org/contact");
die();
?>
