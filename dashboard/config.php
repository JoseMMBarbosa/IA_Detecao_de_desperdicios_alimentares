<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'peter');
   define('DB_PASSWORD', 'peter');
   define('DB_DATABASE', 'alimentos');

   /* Attempt to connect to MySQL database */
	$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
 
	// Check connection
	if($conn === false){
    	die("ERROR: Could not connect. " . mysqli_connect_error());
	}
?>