<?php
require "functions.php";
if(isset($_POST['keyword'])) {
	$response = array(
		'error' => false,
	);
	$response['results'] = get_tickets_by_name($_POST['keyword']);
	print json_encode($response);
} else {
	$response = array(
		'error' => true,
		'message' => 'Please provide at least one character.',
	);
	print json_encode($response);
}

