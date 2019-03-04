<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';

$name = $_POST['name'];
$courriel = $_POST['courriel'];
$sujet = $_POST['sujet'];
$message = $_POST['message'];

//Load composer's autoloader

$mail = new PHPMailer(true);       
try {
// if (!$captcha){
//   header("Location: index.php?msg=1");
//   exit();
// }
// $secretKey = "6LeNvkAUAAAAAJ9ecfLELcutDOr1hlIsxAhVB_yW";
// $ip = $_SERVER['www.geosmartone.com'];
// $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
// $responseKeys = json_decode($response,true);
// if(intval($responseKeys["success"]) !== 1){
//   header("Location: index.php?msg=2");
//   exit();
// }


//Send mail for company
//Server settings
	$mail->CharSet = 'UTF-8';
	$mail->SMTPDebug = 0;                                 
	$mail->isSMTP();                                   
	$mail->Host = 'smtp.yandex.com';
	$mail->SMTPAuth = true;
	// $mail->Username = 'administrator@dfm-infotech.com';
	$mail->Username = 'info@dfm-europe.com';
	$mail->Password = 'admin123';
	$mail->SMTPSecure = 'ssl';
	$mail->Port = 465;

	//sender
	// $mail->setFrom( 'administrator@dfm-infotech.com', 'GEOSMARTONE');
	$mail->setFrom( 'info@dfm-europe.com', 'GEOSMARTONE');

	//Recipients
	$mail->addAddress('info@dfm-europe.com');

	//Body content mail
	$body  = "<html><body>";
	$body .= "<table width='100%' bgcolor='#e0e0e0' cellpadding='0' cellspacing='0' border='0'>";
	$body .= "<tr><td>";
	$body .= "<table align='center' width='100%' border='0' cellpadding='0' cellspacing='0' style='max-width:650px; background-color:#fff; font-family:Verdana, Geneva, sans-serif;'>";
	$body .= "<thead>
	<tr height='80'>
	<th colspan='4' style='background-color:#f5f5f5; border-bottom:solid 1px #bdbdbd; font-family:Verdana, Geneva, sans-serif; color:#333; font-size:34px;' >GEOSMARTONE</th>
	</tr>
	</thead>";
	$body .= "<tbody>
	<tr align='center' height='50' style='font-family:Verdana, Geneva, sans-serif;'>
	</tr>
	<tr>
	<td colspan='4' style='padding:15px;'>
	<p style='font-size:20px;'>Hi' <strong>GEOSMARTONE</strong>,</p>
	<hr />
	<p style='font-size:20px;'><strong>Full Name: </strong>".$name."</p>
	<p style='font-size:20px;'><strong>Courriel: </strong>".$courriel."</p>
	<p style='font-size:20px;'><strong>Sujet: </strong>".$sujet."</p>
	<p style='font-size:20px;'><strong>Message: </strong>".$message."</p>
	</td>
	</tr>
	</tbody>";
	$body .= "</table>";
	$body .= "</td></tr>";
	$body .= "</table>";
	$body .= "</body></html>";
//Content
	$mail->isHTML(true);
	$mail->Subject = 'Question form GEOSMARTONE ';
	$mail->Body    = $body;
	$mail->AltBody = strip_tags($body);

	$mail->send();

	die("OK");

} catch (Exception $e) {
	var_dump($e);
	die();
}
?>