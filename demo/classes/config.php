<?php

	//the config file....
	defined('DS')		 ? 	 null : define("DS", DIRECTORY_SEPARATOR);
	defined('DB_SERVER') ?   null : define("DB_SERVER", "localhost");
	defined('DB_USER')   ?   null : define("DB_USER", "ordondo");
	defined('DB_PASS')   ?   null : define("DB_PASS", "gRnj80^3");
	defined('DB_NAME')   ?   null : define("DB_NAME", "tedxjabi_event");	

	//anywhere you see root... you know that it is the root folder..
	defined($_SERVER['DOCUMENT_ROOT']) ? null : define("root", $_SERVER['DOCUMENT_ROOT']);



?>