<?php
require("PHPMailer-master/PHPMailerAutoload.php");

	$mail = new PHPMailer();

	//$mail->SMTPDebug = 3;                               // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'n1plcpnl0038.prod.ams1.secureserver.net';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'x14346081@ggleagues.com';                 // SMTP username
	$mail->Password = 'x14346081';                           // SMTP password
	//$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	//$mail->Port = 465;                                    // TCP port to connect to

	$mail->setFrom('x14346081@ggleagues.com', 'GGLeagues');
	$mail->addAddress( $user_email, $user_name);     // Add a recipient
	//$mail->addAddress('ellen@example.com');               // Name is optional
	//$mail->addReplyTo('info@example.com', 'Information');
	//$mail->addCC('cc@example.com');
	//$mail->addBCC('bcc@example.com');

	//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = 'GGLeagues - Please confirm your registration.';


	$mail->Body    = '<html>
						<head>

							<title> Thank you for signing up with GGLeagues!  </title>

						</head>
						<body>

						<p>Welcome to GGLeagues! <br/><br/>Thank you for signing up. We can not wait for you to get started! Simply click on the link below and login in to activate your account.</br>  </p>
						<p><br/><a href= "http://www.ggleagues.com/verification.php?email='.$user_email.'&hash='.$hash.'"> Click here to access your link.</a>
						<p><br/>Game hard! <br/>GGLeagues</p>

						</body>
					</html>';


	//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	if(!$mail->send()) {
    	echo 'Message could not be sent.';
    	echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    echo 'Message has been sent';
	}

?>