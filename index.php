<!DOCTYPE html>
<html lang="en">

<?php

	include_once 'connectDatabase.php';
	
?>


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IS 218 Final</title>

</head>

<body>
	<div style="border: 1px dotted black; padding: 5px; margin-bottom: 10px;">
		<h2>Log In</h2>
		<form action="register.php" method="post">
			E-mail: <input type="text" name="email"><br>
			Password: <input type="password" name="password"><br>
			<input type="submit">
		</form>
	</div>

			<?php
			
			// Run the SQL query and put the results into $results (array)
			$results = runQuery("SELECT * FROM Account and Profile Info ORDER BY id");
			
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
