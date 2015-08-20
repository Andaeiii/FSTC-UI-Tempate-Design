<?php

	include("classes/dbase.php");
	
	$db = new Dbase();
	
	//get the requests params.... 
	$ar = $_REQUEST;
	
	//get the variables............
	$tnm  = $ar['tname'];
	$tem  = $ar['tmail'];
	$tpr  = $ar['tpro'];
	$tnum = $ar['tnum'];
	
	$rst = $db->addEvent($tnm, $tem, $tpr, $tnum);	
			
	if($rst != 'err'){
		
		$cd = DB::mkCode($rst);
		
		require_once("classes/PHPMailerAutoload.php");	
		
		$m = new PHPMailer();
		$m->setFrom('admin@tedxjabi.com', 'TedxJabi Event');
		
		
		$m->addAddress('contactus@tedxjabi.com'); 
		$m->addAddress('ujuaku@tedxjabi.com'); 
		$m->addAddress('ninah@tedxjabi.com');  
		$m->addAddress('andaeiii@aol.com', 'Ande Caleb(Developer)');  
		$m->addAddress('andaeiii@gmail.com', 'Ande Caleb(Developer)');
		
		$m->isHtml(true);
		$m->WordWrap = 50;     // Set word wrap to 50 characters	
		$m->Subject = 'TEDxJabi :: New Member Registration....';
		
		$m->Body = '<h1> NEW MEMBER REGISTRATION </h1><hr/><b>NAME :: </b>'.$tnm.'<br><b>E-MAIL :: </b>'.$tem.'<br><b>CODE ::</b> TED-'. $cd .' <br><b>PROFESSION :: </b>'.$tpr.'<br><b>PHONE NUMBER :: </b>'.$tnum;
		
		 $str;
	
			
		if($m->send()){
			echo 'success';
		}else{
			echo 'error';
		}
		
		
		
	}else{		
		echo 'error';		
	}
	
?>