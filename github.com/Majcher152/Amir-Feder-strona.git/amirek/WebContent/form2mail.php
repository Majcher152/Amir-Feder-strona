<?php
// Wymagane informacie

$TO = "biuro@amir-feder.pl";
	// Adres obiorcy
	
	
$DEFAULT_EXIT_PAGE = "send.html";
	// Strona po wyslaniu formularza
	
$subject  = "Wiadomość ze strony amir-feder.pl";
$headers  = "Od: $SERVER_NAME <$mail>\n";
$headers .= "Kontakt ze strony amir-feder.pl";

$message = "";

while (list($key, $val) = each($_POST)) { 
	$message .= "$key : $val\n"; 
} 

$message .= "\nSent by ".gethostbyaddr($REMOTE_ADDR). " ($REMOTE_ADDR)\n";

mail($TO, $subject, $message, $headers); 
	// naglowki 


if(! $exit_page)
	$exit_page = $DEFAULT_EXIT_PAGE;

Header("Location: ".$exit_page);
	// strona wyjsciowa

?> 