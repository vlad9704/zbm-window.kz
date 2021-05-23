<?php
if ( trim( $_POST['mfbPhone'] ) == '' ) {
	echo 'fasle';
} else {
	$txtname  = trim( $_POST['mfbName'] );
	$txtemail = trim( $_POST['mfbMail'] );
	$txtphone = trim( $_POST['mfbPhone'] );

	// от кого
	$fromMail = 'bahtdiar@gmail.com';
	// Сюда введите Ваш email
	$emailTo = 'verstkaprokz@gmail.com';

	$subject = 'Обратная связь';
	$subject = "=?utf-8?b?" . base64_encode( $subject ) . "?=";
	$headers = 'From: zmb-windows@zbm-windows.kz' . "\r\n" .
	           'Reply-To: zmb-windows@zbm-windows.kz' . "\r\n" .
	           'Content-type: text/plain; charset="utf-8 . "\r\n' .
	           'MIME-Version: 1.0 . \r\n' .
	           "Date: " . date( 'D, d M Y h:i:s O' ) . "\r\n" .
	           'X-Mailer: PHP/' . phpversion();

	// тело письма на почту
	$body = "Получено письмо с сайта zbm-windows.kz \n\nИмя: " . $txtname . "\nТелефон: " . $txtphone;
	if(mail( $emailTo, $subject, $body, $headers ))
		echo 'ok';
	else
		echo 'mail() error';
}
	
	
	
