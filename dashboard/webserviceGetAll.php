<?php
	include 'config.php';
	$result = mysqli_query($conn, "SELECT * FROM desp") or die(mysql_error());

	// check for empty result
	if (mysqli_num_rows($result) > 0) {
		// loop through all results
		$response["desp"] = array();
		while ($row = mysqli_fetch_array($result)) {
        	// temp user array
        	$desp = array();
			$desp["ID"] = $row["ID"];
			$desp["desperdicio"] = $row["desperdicio"];
        	$desp["datahora"] = $row["datahora"];

        	// push single desp into final response array
        	array_push($response["desp"], $desp);
    	}
    	$response["success"] = 1;
 
    	// echoing JSON response
    	echo json_encode($response);
	}
	else{
		// no desp found
    	$response["success"] = 0;
    	$response["message"] = "No albums found";
 
    	// echo no users JSON
    	echo json_encode($response);
	}
?>