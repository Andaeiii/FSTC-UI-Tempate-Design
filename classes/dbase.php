<?php
	
	require 'config.php';
	
	class Dbase{
		
		var $db;
		
		function __construct(){
			//use the config...
			$this->db = mysql_connect(DB_SERVER, DB_USER, DB_PASS);			
			if($this->db){
				if(mysql_select_db(DB_NAME)){
					//echo 'successfully connected to database....';
				}else{
					echo 'could not connect to dbase'.mysql_error();
					//exit;
				}
			}
		}	
		
		// name,email,prof,phone
		public function addEvent($name='', $mail='', $pro='', $phone=''){
			$dt = $this->dateTime();
			$q = mysql_query("insert into event values('', '$name', '$mail', '$pro', '$phone', '$dt')");
			if($q){
				if(mysql_affected_rows() > 0){
					return mysql_insert_id();
				}else{
					return 'err';
				}
			}
			
		}
		
		public function clearAll(){
			$q = mysql_query("truncate table event");
			if($q){
				return "...success";
			}else{
				return "....error deleting tables";
			}
		}
		
		private function dateTime(){
			// Current date/time in your computer's time zone.
			$date = new DateTime();
			return $date->format('Y-m-d H:i:s');
		}
		
		
		public static function slash($v){
			return addslashes($v);
		}
		
		public static function pr($v){
			echo '<pre>';
			print_r($v);
			echo '</pre>';
		}
		
		
		 // Thu 17 March 2011 5:49 PM
		
		public function all(){
			$rst = mysql_query('select * from event');
			$ar = array();
			if($rst){
				while($r = mysql_fetch_array($rst)){
					
					$date = new DateTime($r['date_created']);		
					$dc = $date->format('D j F Y g:i A');		
					
					$d = array(
								'Code' => 'TED-00'.$r['id'],
								'Name' => $r['ted_name'],
								'Email' => $r['ted_email'],
								'Profession' => $r['ted_pro'],
								'Phone Num.' => $r['ted_phone'],
								'Date Created' => $dc
							);
					
					array_push($ar, $d);			
				}
			}
			return $ar;
		}
		
		
	}
	
	
?>