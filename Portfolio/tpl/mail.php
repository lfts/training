<?php
require_once('lib/PHPMailerAutoload.php');

	//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
	//$body             = file_get_contents('contents.html');
	//$body             = eregi_replace("[\]",'',$body);

if (empty($_POST["nom"]) == false) {

	$body             = "Un visiteur vous a laissé un message" . "<br>";
	$body             = "nom : " . $_POST['nom']."<br>";
	$body             = "prenom : " . $_POST['prenom']."<br>";
	$body             = "email : " . $_POST['email']."<br>";
	$body             = "message : " . $_POST['message']."<br>";

$mail             = new PHPMailer();
	
$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "ssl0.ovh.net"; // SMTP server
$mail->SMTPDebug  = 0;                     // 2 pour afficher le debug. enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
	//$mail->Host       = "mail.yourdomain.com"; // sets the SMTP server
	//$mail->Port       = 26;                    // set the SMTP port for the GMAIL server
$mail->Username   = "toto@lcnaud.fr"; // SMTP account username
$mail->Password   = "totoducesi";        // SMTP account password

$mail->SetFrom('joseph.widdy@gmail.com', 'Widdy');

	//$mail->AddReplyTo("name@yourdomain.com","First Last");

$mail->Subject    = "Un objet de test";

$mail->AltBody    = "$body"; // optional, comment out and test

$mail->MsgHTML($body);

	//$address = "joseph.widdy@gmail.com";
$mail->AddAddress("joseph.widdy@gmail.com", "Widdy JOSEPH");

	//$mail->AddAttachment("images/phpmailer.gif");      // attachment
	//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
	echo "<span style=\"color: red\">Une erreur est survenue lors de l'envoi du message: </span>" . $mail->ErrorInfo;
} 	else {
	echo "<span style=\"color: green\">Votre message a bien été envoyé</span>";
}

} 

?>
