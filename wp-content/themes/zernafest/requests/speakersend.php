<?php

if (isset($_POST["offer-speaker-name"])) { $person_name = $_POST["offer-speaker-name"];}
if (isset($_POST["offer-speaker-mail"])) { $person_mail = $_POST["offer-speaker-mail"];}
if (isset($_POST["offer-speaker-tel"])) { $person_phone = $_POST["offer-speaker-tel"];}
if (isset($_POST["offer-speaker-speaker-name"])) { $speaker_name = $_POST["offer-speaker-speaker-name"];}
if (isset($_POST["offer-speaker-speaker-social"])) { $speaker_social = $_POST["offer-speaker-speaker-social"];}


$mail_to = "lid@zernafest.ru";
// info@kweb.studio
$mail_from = "Новая заявка на zernafest.ru" . "\n";
$mail_body = '<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Предложение нового спикера на zernafest.ru</title>
</head>
<body>
	<table width="100%" cellpadding="0" cellspacing="0"><tr><td>
		<table id="top-message" cellpadding="0" cellspacing="0" bgcolor="ffffff"><tr><td><img src="https://png.icons8.com/ios/50/000000/da-vinci.png" style="width: 20px; height: 20px;"></td><td><p style="margin: 5px 0; padding-left: 10px;">От кого: '. $person_name .'</p></td></tr></table>

		<table id="main" cellpadding="0" cellspacing="0" bgcolor="ffffff"><tr><td><img src="https://png.icons8.com/ios/50/000000/phone.png" style="width: 20px; height: 20px;"></td><td><p style="margin: 5px 0; padding-left: 10px;">Номер телефона: '.$person_phone.'</p></td></tr></table>

		<table id="bottom-message" cellpadding="0" cellspacing="0" bgcolor="ffffff"><tr><td><img src="https://png.icons8.com/ios/50/000000/important-mail.png" style="width: 20px; height: 20px;"></td><td><p style="margin: 5px 0; padding-left: 10px;">Адрес почты: '.$person_mail.'</p></td></tr></table>

		<table id="bottom-message" cellpadding="0" cellspacing="0" bgcolor="ffffff"><tr><td><img src="https://png.icons8.com/ios/50/000000/administrative-tools.png" style="width: 20px; height: 20px;"></td><td><p style="margin: 5px 0; padding-left: 10px;">Имя спикера: '.$speaker_name.'</p></td></tr></table>

		<table id="bottom-message" cellpadding="0" cellspacing="0" bgcolor="ffffff"><tr><td><img src="https://png.icons8.com/ios/50/000000/administrative-tools.png" style="width: 20px; height: 20px;"></td><td><p style="margin: 5px 0; padding-left: 10px;">Соц сети спикера: '.$speaker_social.'</p></td></tr></table>

	</tr></td>
</table>
</body>
</html>';
$headers  = "Content-type: text/html; charset=utf-8 \r\n";

$result = mail ($mail_to, $mail_from, $mail_body, $headers);

?>
