<?php

// if the url field is empty
if(isset($_POST['url']) && $_POST['url'] == ''){

	// put the email we're sending to here
	$youremail = 'jessbnsn@gmail.com';

	// prepare a "pretty" version of the message
	// Important: if you added any form fields to the HTML, you will need to add them here also
	$body = "This is an expression of interest email address that was just submitted via whiterobins.com:
	E-Mail: $_POST[email]";

	// Use the submitters email if they supplied one
	// (and it isn't trying to hack your form).
	// Otherwise send from your email address.
	if( $_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email']) ) {
	  $headers = "From: $_POST[email]";
	} else {
	  $headers = "From: $youremail";
	}

	// finally, send the message
	mail($youremail, 'Contact Form', $body, $headers );

}

// otherwise, let the spammer think that they got their message through

?>
<!DOCTYPE HTML>
<html>
<head>

<title>Thanks!</title>

</head>
<body>

<h1>Thanks</h1>
<p>We'll get back to you as soon as possible.</p>

</body>
</html>
