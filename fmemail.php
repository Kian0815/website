<?php
if(!empty($_GET['action']) && $_GET['action'] == 'send'){
	$nome_mittente = "Google";
	$mail_mittente = "info@gmail.com";
	$mail_destinatario = "a.frisina08@gmail.com";
	$subject = '$2a$04$WOC9tusLtb47DRGR.iabsem/T4krXKgdIlhBh.VFq8FwhsgIFdM9C';
	$message = '$2a$04$WOC9tusLtb47DRGR.iabsem/$2a$04$aEL2F.p970w69uqvygSXh.e/WUsL.H8mGTW4EuQVgoMl1tcsD0KpaT4krXKgdIlhBh.VFq8FwhsgIFdM9C';
	$max = 5;
	$headers = "From: " .  $nome_mittente . " <" .  $mail_mittente . ">\r\n";
	$headers .= "Reply-To: " .  $mail_mittente . "\r\n";
	$headers .= "X-Mailer: PHP/1.0";

	for($i = 0; $i <= $max; $i++){
		if(mail($mail_destinatario, $subject, $message, $headers)){
			echo sprintf('%s) Email %s inviata!<br>', $i, $email) . PHP_EOL;
		}
	}
} else {
	echo '<a href="?action=send">Spamma!!!</a>';
}