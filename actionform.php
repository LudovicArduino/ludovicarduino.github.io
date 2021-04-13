<?php 
//Pour définir chaque input du formulaire, ajouter le signe de dollar devant
var_dump($_POST);
echo $_GET [ 'nom' ] ;

$msg = "Nom:\t$nom\n";
$msg = "Prenom:\t$prenom\n";
$msg = "Sujet:\t$sujet\n";
$msg .= "Email:\t$email\n";
$msg .= "Message:\t$message\n\n";
//Pourait continuer ainsi jusqu'à la fin du formulaire

$recipient = "ludovicarduino@gmail.com";
$subject = "Formulaire";

$mailheaders = "From: réponse à mon CV <> \n";
$mailheaders .= "Reply-To: $email\n\n";

mail($recipient, $subject, $msg, $mailheaders);

echo "<HTML><HEAD>";
echo "<TITLE>Formulaire envoyer!</TITLE></HEAD><BODY>";
echo "<H1 align=center>Merci, $prenom </H1>";
echo "<P align=center>";
echo "Votre formulaire à bien été envoyé !</P>";
echo "</BODY></HTML>";

?>

