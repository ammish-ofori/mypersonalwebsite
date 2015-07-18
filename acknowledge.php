<?php
if (isset($_POST['send'])) {
    $to = 'kelechiudoagwu@gmail.com'; // Use your own email address
    $subject = 'Potential client from my site'; 
    $message = 'Name: ' . $_POST['name'] . "\r\n\r\n";
    $message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
				$message .= 'Inquiry: ' . $_POST['inquiry'];
				$success = mail($to, $subject, $message);
}
?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>Message Confirmation</title>
	</head>
	<body>
	<?php if (isset($success) && $success) { ?>
	<h1>Thank You</h1>
	<p>Your message has been sent.</p>
	<?php } else { ?>
	<h1>Oops!</h1>
	<p>Sorry, there was a problem sending your message.</p>
<?php } ?>
</body>
</html>