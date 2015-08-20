<?php	 
	 require('classes/dbase.php');
	 $db = new Dbase();
?>	
 
	 
	<h1>Total Number of Registered Users :: <?php echo count($db->all()); ?> </h1> <hr> <?php DBase::pr($db->all()); ?>
	 
	 
