<?php
extract($_POST);
if(empty($prenom)){
	echo "Veuillez renseigner le champ <i>Prénom</i>.";
} elseif(empty($nom)){
	echo "Veuillez renseigner le champ <i>Nom</i>.";
} elseif(strlen($nom)>20){
	echo "Votre nom est trop long (20 caractères maximum).";
} elseif(empty($mail)){
	echo "Veuillez renseigner le champ <i>Mail</i>.";
} elseif(!preg_match("#^[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?@[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?\.[a-z]{2,30}$#i",$mail)){
	echo "L'adresse mail est incorrecte.";
} elseif(empty($msg)){
	echo "Veuillez renseigner le champ <i>Message</i>.";
} else {
	$destinataire = "ludovicarduino@gmail.com";
	$titre = "Contact CV";
	$Entetes = "MIME-Version: 1.0\r\n";
	$Entetes .= "Content-type: text/html; charset=utf-8\r\n";
	$Entetes .= "From: CV <noreply@ludovicarduino.fr>\r\n";
	$Entetes .= "Reply-To: $mail <$mail>\r\n";
	if(mail($destinataire,"=?UTF-8?B?".base64_encode($titre)."?=",(!empty($tel)?"Numéro de téléphone: $tel<br/><br/>":"")."Envoyé par $prenom $nom<br/><br/>".nl2br(htmlentities($msg,ENT_QUOTES,"UTF-8")),$Entetes))
		echo "ok";
	else
		echo "Une erreur s'est produite, merci de réessayer s'il vous plaît.";
	
}