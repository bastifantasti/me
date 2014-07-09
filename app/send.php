<?php if (!isset($_SESSION)) session_start();

		if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

		$name     	= $_POST['name'];
		$company    = $_POST['company'];
        $email    	= $_POST['email'];
        $budget    	= $_POST['budget'];
        $project 	= $_POST['project'];
        $error		= '';

		$address = "sebastian_felix@mac.com";

		$e_subject = 'Neue Nachricht: ' . $name . ', ' . $company  . ', ' . $email  . '.';

		$e_body = "Neue Nachricht: $name, $company, $email" . PHP_EOL . PHP_EOL;
		$e_content = "Anliegen: $budget, \"$project\"" . PHP_EOL . PHP_EOL;
		$e_reply = "Kontakt $name via email: $email";

		$msg = wordwrap($e_body . $e_content . $e_reply,70);

		$headers = "From: $email" . PHP_EOL;
		$headers .= "Reply-To: $email" . PHP_EOL;
		$headers .= "MIME-Version: 1.0" . PHP_EOL;
		$headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
		$headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;
		   
		if(mail($address, $e_subject, $msg, $headers)) {

			echo "<div class='success-msg'>
				<span class='icon-info-2'></span>
				Hi, $name.<br>
				Deine Nachticht wurde verschickt.<br>
				Ich melde mich!
			</div>";

		} else {

			echo 'ERROR! Your message could not be sent.';

		}