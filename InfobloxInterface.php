<?php

	class InfobloxInterface {

	    // property declaration
	    public $hostname;
	    public $username;
	    public $password;


	    public function getHostname(){



	    }

	    public function getUsername(){



	    }

	    public function getPassword(){



	    }


	    public function __construct($host, $user, $pass){

	    	$this->hostname = $host;
	    	$this->username = $user;
	    	$this->password = $pass;

	    }

	    // method declaration
	    public function createDNSEntry($entry, $ip) {

	        $ch = curl_init();   //init curl

	        $url = $this->hostname . "/wapi/v1.2/record:host";

	        $json = json_encode(array(
				 "name" => "$entry",
				 "ipv4addrs" => array(array(
					"ipv4addr" => "$ip"
				 ))
			));  

			curl_setopt($ch,CURLOPT_URL,$url); //define url
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,true); //TRUE to return the transfer as a string of the return value of curl_exec() instead of outputting it out directly.
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  // Disable SSL verification
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);  // Disable SSL verification
			curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);  //http auth type basic
			curl_setopt($ch, CURLOPT_USERPWD, $this->username . ":" . $this->password);  //UN and PW
		    //curl_setopt($ch,CURLOPT_HEADER, false);  //false to not return headers
			curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
				'Content-Type: application/json',                                                                                
				'Content-Length: ' . strlen($json))                                                                       
			); 

			$output['data'] = curl_exec($ch);
			$output['headers'] = curl_getinfo($ch);


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
