<?php

	include("classes/dbase.php");
	
	if(!empty($_REQUEST['user'])){
		if($_REQUEST['user'] == "andaeiii"){
			$db = new Dbase();
			echo $db->clearAll();
		}else{
			echo 'error deleting tables';
		}
	}else{
		echo "access denied";
	}
	
?>