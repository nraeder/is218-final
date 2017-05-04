<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
	include_once 'database.php';
	

	//Let's make sure the correct data is received. 
	if (!isset($_REQUEST['Email']) || !isset($_REQUEST['First Name']) || !isset($_REQUEST['Last Name'])){
		header('HTTP/1.1 500 Internal Server Error');
		exit("ERROR: There was an error writing to the database. Some required data was missing.");
	}
	else if ($_REQUEST['Email'] == null || $_REQUEST['First Name'] == null || $_REQUEST['Last Name'] == null){
		header('HTTP/1.1 500 Internal Server Error');
		exit("ERROR: There was an error writing to the database. Some required data was blank.<br><a href='index.php'>Go back to main page.</a>");
	}

	$useremail = $_REQUEST['Email'];
	$firstname = $_REQUEST['First Name'];
	$lastname = $_REQUEST['Last Name'];

	//Let's make sure the e-mail exists (so we can modify it).
	$sql = 'SELECT * FROM Account and Profile Info WHERE email="'.$useremail.'"';
	$results = runQuery($sql);
	
	//If the following line has results (the array length is more than 0), that means data/e-mail exists.
	if (count($results) == 0){
		header('HTTP/1.1 500 Internal Server Error');
		exit("ERROR: The e-mail address doesn't exist.<br><a href='index.php'>Go back to main page.</a>");
	}

	//Let's update the entry
	$sql = 'UPDATE Accounts and Profile Info SET First Name="'.$firstname.'", Last Name="'.$lastname.'" WHERE Email ="'.$useremail.'"';
	$results = runQuery($sql);
	
	echo "User Updated.";

?>

	<div>
		<a href="index.php">Go back to main page.</a>
	</div>

</body>
</html>
