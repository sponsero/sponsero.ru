<?php

function getPost($key, $default) {
	if (isset($_POST[$key]))
		return $_POST[$key];
	return $default;
}

if(!empty($_POST)){
	$toAdmin = "ff.warprobot@gmail.com";
	$toCEO = "vahtang@sponsero.ru";
	$toINFO = "info@sponsero.ru";

	$email = getPost('email', 'no_email ;-(');
	$first_name = getPost('firstName', 'First name is uknown');
	$last_name = getPost('lastName', 'Last name is uknown');
	$company = getPost('company', 'Company is uknown');
	$phone = getPost('phone', 'Phone is uknown');

	$message = 'Email: ' . $email . "\r\n\r\n" .
		'FirstName: ' . $first_name . "\r\n\r\n" .
		'LastName: ' . $last_name . "\r\n\r\n" .
		'Company' . $company . "\r\n\r\n" .
		'Phone:' . $phone . "\r\n\r\n";

	$headers[] = 'MIME-Version: 1.0';
	$headers[] = 'Content-type: text/html; charset=utf-8';
	$headers[] = 'From: Info Sponsero <info@sponsero.ru>';
	
	$retval = mail($toAdmin, 'New Request!', $message, implode("\r\n", $headers));
	$retval2 = mail($toCEO, 'New Request!', $message, implode("\r\n", $headers));
	$retval3 = mail($toINFO, 'New Request!', $message, implode("\r\n", $headers));

	echo 'Success';
}
?>