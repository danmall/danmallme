<?


	/*****************************************************************************************
        GRAB FORM VARIABLES & SET GLOBALS
	........................................................................................*/	
	
	$contactName = $_POST["contact-name"];	
	$contactEmail = trim($_POST["contact-email"]);
	$contactWebsite = $_POST["contact-website"];
	$contactSubject = $_POST["contact-subject"];
	$contactMessage = $_POST["contact-message"];
	$contactTest = $_POST["contact-test"];	

	$sendTo = "dan@danielmall.com, emilymall@me.com, info@superfriend.ly";
	$subject = $contactName."'s email from DanielMall.com";
	//$headers = 'From: '.$contactName.' <'.$contactEmail.'> '. $contactEmail;
	$headers = 'From: '.$contactName.' <'.$contactEmail.'> ';
	
	
    /*****************************************************************************************
        Initial Testing
	........................................................................................*/    
    
    if (strtolower($contactTest) != 'green' || $contactName == '' || $contactEmail == '' || $contactSubject == '' || $contactMessage == ''  ) {
        //die('Wrong access code');
        header( "Location: /contact/?error" );
        exit;
    }	
	
	/*****************************************************************************************
        CREATE MESSAGE BODY
	........................................................................................*/
	
	$contactBody = "Name: " . $contactName . "\n\n";
	$contactBody .= "Email: " . $contactEmail . "\n\n";
	if($contactWebsite != '' || $contactWebsite != 'http://'){
	    $contactBody .= "Website: " . $contactWebsite . "\n\n";
	}
	$contactBody .= "Subject: " . $contactSubject . "\n\n";
	$contactBody .= "Message: " . $contactMessage . "\n\n";
	$contactBody .= "IP Address: " . getRealIpAddr();
	
	
    
    /*****************************************************************************************
        SEND EMAIL
	........................................................................................*/
   
	if(!isValidEmail($contactEmail)) {  
		header( "Location: /contact/?error" );
	}else {
	 	mail($sendTo, $subject, $contactBody, $headers);
		header( "Location: /contact/thanks/" );
	}

	
	
	/*****************************************************************************************
        FUNCTIONS
	........................................................................................*/
	
	/* http://www.webtoolkit.info/php-validate-email.html */	
	function isValidEmail($email){
	    return eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email);
	}
	
	
	/* http://roshanbh.com.np/2007/12/getting-real-ip-address-in-php.html */ 
	function getRealIpAddr()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
        {
          $ip=$_SERVER['HTTP_CLIENT_IP'];
        }
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
        {
          $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else
        {
          $ip=$_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

?>