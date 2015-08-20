<?php

	include("PHPMailerAutoload.php");
	
	class MailBox{
		
		private $mail;
		private $to;
		
		var $error;
		
		function __construct($from=array(), $isHTML='false'){
			
			$this->mail = new PHPMailer();			
			$this->to = array();			
			$this->mail->isHtml($isHTML);
			if(self::isValid($from[0])){
				$this->mail->setFrom($from[0], $from[1]);
			}else{
				$this->throwError('invalidMailAddr');
			}
			$this->error = '';
		}
		
		public function to($addr){	
				
			foreach($addr as $ads){
				if(self::isValid($ads)){
					$this->mail->addAddress($ads);
					array_push($this->to, $ads);	//echo $ads;
				}else{
					$this->throwError('invalidMailAddr');
				}
			}
			
			//$this->showAddrs();
		}
		
		public function showAddrs(){
			self::pr($this->to);
			exit;
		}
		
		private function setMsg($subject='', $msg=''){			
			$this->mail->WordWrap = 50;     // Set word wrap to 50 characters			
			//set the subject of the message.....................................
			if($subject != ''){
				$this->mail->Subject = $subject;
			}else{
				$this->throwError('invalidSub');
			}			
			//set the message of the mail............
			if($msg != ''){
				$this->mail->Body = $msg;
			}else{
				$this->throwError('invalidMsg');
			}			
		}
		
		public static function isValid($email=''){
			$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
			if(preg_match($regex, $email)) {
				 return true;
			}else{ 
				return false; 
			} 
		}
		
		private function throwError($err){
			switch($err){
				case 'invalidMailAddr':
					echo 'INVALID ADDRESS ::: Check your addresses..';
					break;
				case 'invalidMsg':
					echo 'INVALID MESSAGE ::: your message was left blank..';
					break;
				case 'invalidSub':
					echo 'INVALID SUBJECT ::: subject cannot be left empty..';
					break;
			}	
			exit;		
		}
		
		public function send($msg='',$subject=''){
			$this->setMsg($subject, $msg);	//set the message and the subject..
			if($this->mail->send()){
				$this->error = '';
				return true;
			}else{
				$this->error = $this->mail->ErrorInfo;
			}
		}
		
		public static function pr($ar){
			echo '<pre>';
			print_r($ar);
			echo '</pre>';
			exit;
		}
			
	}
	
	
?>