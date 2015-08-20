<?php

	include("classes/dbase.php");
	
	function cleanMail($mail){
		$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i"; 
		if (preg_match($pattern, trim(strip_tags($mail)))) { 
			return trim(strip_tags($mail)); 
		}
	}
	
	$db = new Dbase();
	
	//get the requests params.... 
	//$ar = $_REQUEST;
	
	//get the variables............
	$tnm  = addslashes( $_REQUEST['tname'] );
	$tem  = addslashes( $_REQUEST['tmail'] );
	$tpr  = addslashes( $_REQUEST['tpro'] );
	$tnum = addslashes( $_REQUEST['tnum'] );
	
	$rst = $db->addEvent($tnm, $tem, $tpr, $tnum);		
			
	if($rst){
		
		//$d = mysql_
		$cd = '00' . intval(mysql_insert_id());
		
		//mail('ninah@'
		//
		
		// require_once("classes/PHPMailerAutoload.php");	
		
		// $m = new PHPMailer();
		// $m->setFrom('admin@tedxjabi.net', 'TedxJabi Event');
		
		
		// $m->addAddress('contactus@tedxjabi.net'); 
		// $m->addAddress('ujuaku@tedxjabi.net'); 
		// $m->addAddress('ninah@tedxjabi.net');  
		// $m->addAddress('andaeiii@aol.com', 'Ande Caleb(Developer)');  
		// $m->addAddress('andaeiii@gmail.com', 'Ande Caleb(Developer)');
		
		// $m->isHtml(true);
		// $m->WordWrap = 50;     // Set word wrap to 50 characters	
		// $m->Subject = 'TEDxJabi :: New Member Registration....';
		
		// $m->Body = '<h1> NEW MEMBER REGISTRATION </h1><hr/><b>NAME :: </b>'.$tnm.'<br><b>E-MAIL :: </b>'.$tem.'<br><b>CODE ::</b> TED-'. $cd .' <br><b>PROFESSION :: </b>'.$tpr.'<br><b>PHONE NUMBER :: </b>'.$tnum;
		
		 // $str;
	
			
		// if($m->send()){
			// echo 'success';
		// }else{
			// echo 'error';
		// }
	
	
	
		///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
		// PREPARE THE BODY OF THE MESSAGE

			$message = '<html><body>';
			$message .= '<img src="http://www.tedxjabi.net/assets/footlogx.jpg"/>';
		
			//$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
			//$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['req-name']) . "</td></tr>";
			//$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['req-email']) . "</td></tr>";
			//$message .= "</table>";
			
			$message .= '<h1> NEW MEMBER REGISTRATION </h1><hr/><b>NAME :: </b>'.$tnm.'<br><b>E-MAIL :: </b>'.$tem.'<br><b>CODE ::</b> TED-'. $cd .' <br><b>PROFESSION :: </b>'.$tpr.'<br><b>PHONE NUMBER :: </b>' . $tnum;
			
			$message .= "</body></html>";        
            
            //   CHANGE THE BELOW VARIABLES TO YOUR NEEDS
             
			$to = 'admin@tedxjabi.net';
			
			$subject = 'New Member Registration';
			
			$headers = "From: " . cleanMail($tem) . "\r\n";
			$headers .= "Reply-To: ninah@tedxjabi.net\r\n";
			$headers .= "CC: ". $tem ."\r\n";
			$headers .= "BCC: ninah@tedxjabi.net\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


           if(mail($to, $subject, $message, $headers)){
			
				echo "success";
			
		   }else{
				echo "error";
			}
            
        // DON'T BOTHER CONTINUING TO THE HTML...
        // die();
		///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	}else{		
		echo "error";		
	}
	
?>