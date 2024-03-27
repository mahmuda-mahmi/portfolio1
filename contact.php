<?php
$field_fname = $_POST['fname'];
$field_lname = $_POST['lname'];
$field_phone = $_POST['phone'];
$field_email = $_POST['email'];
$field_message = $_POST['message'];

$mail_to = 'mahmudapakter@gmail.com';
$subject = 'Message from a site visitor '.$field_fname;

$body_message = 'From: '.$field_fname."\n";
$body_message .= 'Phone: '.$field_phone."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you shortly.');
		
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to mluceroweb@gmail.com');
		window.location = 'index.html';
	</script>
<?php
}
?>