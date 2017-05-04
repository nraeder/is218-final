<!DOCTYPE html>
<html lang="en">

<?php

	include_once 'database.php';
	
?>
<style>
div {
	color: lightblue;
}
</style>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IS 218 Final</title>

</head>

<body>
	<center><div style="border: 1px dotted black; padding: 5px; margin-bottom: auto;">
		<h2>Register</h2>
		<form action="register.php" method="post">
			First Name: <input type="text" name="First Name"><br>
			Last Name: <input type="text" name="Last Name"><br>
			E-mail: <input type="text" name="Email"><br>
			Phone Number: <input type="text" name="Phone Number"><br>
			Birthday: <input type="text" name="Birthday"><br>
			Gender: <input type="text" name="Gender"><br>
			Password: <input type="password" name="Password"><br>
			<input type="submit">
			<a href="logIn.php">Log In</a>
		</form>
	</div></center>

			<?php
			
			// Run the SQL query and put the results into $results (array)
			$results = runQuery("SELECT * FROM Account ORDER BY id");
			
			foreach ($results as $key=>$row) {
				
			    echo '<div class="row">';
	            echo '   <h3>Account '.($key+1).' (Database ID: '.$row['id'].')</h3>';
	            echo '   <p>E-Mail: '.$row['Email'].'</p>';
	            echo '   <p>Name: '.$row['First Name'].' '.$row['Last Name'].'</p>';
				echo '</div>';
				echo '<br>';
	
			}
		?>

</body>

</html>
