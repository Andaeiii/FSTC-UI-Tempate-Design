<?php

	 
			require('classes/dbase.php');
			$db = new Dbase();
			
			$rst = mysql_query('select * from event');
			$ar = array();
			
			$ct = 1;
			
			if($rst){
				
				
				while($r = mysql_fetch_array($rst)){
					
					$date = new DateTime($r['date_created']);	
											
					$message = '<html><body>';
					$message .= '<img src="http://www.tedxjabi.net/assets/footlogx.jpg"/>';
					
					$message .= '<h1> NEW MEMBER REGISTRATION </h1><hr/><b>NAME :: </b>'. $r['ted_name'] .'<br><b>E-MAIL :: </b>'. 
					$r['ted_email'] .'<br><b>CODE ::</b> TED-'. $cd .' <br><b>PROFESSION :: </b>'. $r['ted_pro'] .'<br><b>PHONE NUMBER :: </b>' . $r['ted_phone'];
					
					$message .= "</body></html>";               
					$to = 'admin@tedxjabi.net';
					$subject = 'New Member Registration';
					$headers = "From: " . $r['ted_email'] . "\r\n";
					$headers .= "Reply-To: ninah@tedxjabi.net\r\n";
					$headers .= "CC: ". $r['ted_email'] ."\r\n";
					$headers .= "BCC: ninah@tedxjabi.net\r\n";
					$headers .= "MIME-Version: 1.0\r\n";
					$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			
					if(mail($to, $subject, $message, $headers)){					
						echo "No." . $ct . " - email successfully sent to success <br/>";					
				    }else{
						echo "error";
				    }
					
					$ct++;
				}
				
			}
				
				

			


          
?>