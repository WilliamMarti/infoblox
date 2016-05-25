<?php

	class InfobloxInterface {

	    // property declaration
	    public $hostname;
	    public $username;
	    public $password;

	    function __construct($host, $user, $pass){

	    	$hostname = $host;
	    	$username = $user;
	    	$password = $pass;

	    }

	    // method declaration
	    public function createDNSEntry($url,$username,$password,$entry, $ip) {

	        $ch = curl_init();   //init curl

			curl_setopt($ch,CURLOPT_URL,$url); //define url
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,true); //TRUE to return the transfer as a string of the return value of curl_exec() instead of outputting it out directly.
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  // Disable SSL verification
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);  // Disable SSL verification
			curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);  //http auth type basic
			curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);  //UN and PW
		    //curl_setopt($ch,CURLOPT_HEADER, false);  //false to not return headers

			$output['data'] = curl_exec($ch);
			//$output['headers'] = curl_getinfo($ch);


			curl_close($ch);
			return $output;

	    }

	    /***

			Delete DNS Entry
			Supply Grid URL, username, password, and FQDN

	    ***/

	    public function deleteDNSEntry($url,$username,$password,$entry) {

	    	$ch = curl_init();   //init curl

			curl_setopt($ch,CURLOPT_URL,$url); //define url
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,true); //TRUE to return the transfer as a string of the return value of curl_exec() instead of outputting it out directly.
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  // Disable SSL verification
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);  // Disable SSL verification
			curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);  //http auth type basic
			curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);  //UN and PW
		    //curl_setopt($ch,CURLOPT_HEADER, false);  //false to not return headers

			$output['data'] = curl_exec($ch);
			//$output['headers'] = curl_getinfo($ch);


			curl_close($ch);
			return $output;
	    	
	    }


	    /***

			Get DNS Entry by hostname
			Supply Grid URL, username, password, and FQDN

	    ***/

	    public function getEntryByHost($url,$username,$password,$host) {

	    	$ch = curl_init();   //init curl

			curl_setopt($ch,CURLOPT_URL,$url); //define url
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,true); //TRUE to return the transfer as a string of the return value of curl_exec() instead of outputting it out directly.
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  // Disable SSL verification
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);  // Disable SSL verification
			curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);  //http auth type basic
			curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);  //UN and PW
		    //curl_setopt($ch,CURLOPT_HEADER, false);  //false to not return headers

			$output['data'] = curl_exec($ch);
			//$output['headers'] = curl_getinfo($ch);


			curl_close($ch);
			return $output;


	    }

	    /***

			Get DNS Entry by IP
			Supply Grid URL, username, password, and FQDN

	    ***/

	    public function getEntryByIP($url,$username,$password,$host) {

	    	$ch = curl_init();   //init curl

			curl_setopt($ch,CURLOPT_URL,$url); //define url
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,true); //TRUE to return the transfer as a string of the return value of curl_exec() instead of outputting it out directly.
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  // Disable SSL verification
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);  // Disable SSL verification
			curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);  //http auth type basic
			curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);  //UN and PW
		    //curl_setopt($ch,CURLOPT_HEADER, false);  //false to not return headers

			$output['data'] = curl_exec($ch);
			//$output['headers'] = curl_getinfo($ch);


			curl_close($ch);
			return $output;


	    }
	}

?>
