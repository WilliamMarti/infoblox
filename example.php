<?php

	# include the InfobloxInterface class
	include "../github/infoblox/InfobloxInterface.php";

	# set parameters to create InfobloxInterface class
	$host = "https://10.10.10.10";
	$username = "admin";
	$password = "password";

	# create InfoboxInterface class
	$wrapper = new InfobloxInterface($host, $username, $password);

	# parameters for simple DNS entry
	$ip = "10.10.10.10";
	$entry = "example.test.com";

	# attributes for extensible attributes
	$attrivarname = "Notes";
	$attrival = "Test Note";

	# put the attributes into the 2 dimensional array
	$attributes = array
			  (
			  array("Notes","Test Notes")
			  );


	# create the DNS etnry with parameters provided earlier
	$wrapper->createDNSEntry($entry, $ip, $attributes);
	#$wrapper->deleteDNSEntry($entry);


?>