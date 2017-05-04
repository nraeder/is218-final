<!DOCTYPE html>
<html lang="en">

<?php

	include_once 'database.php';
	
?>


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Log In</title>

</head>

<body>
	<center><div style="border: 1px dotted black; padding: 5px; margin-bottom: 10px;">
		<h2>Log In!</h2>
		<form action="logIn.php" method="post">
			E-mail: <input type="text" name="Email"><br>
			Password: <input type="password" name="Password"><br>
			<input type="submit">
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
