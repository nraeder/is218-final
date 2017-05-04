<!DOCTYPE html>
<html lang="en">

<?php
	include_once 'database.php';
	
?>
	
<style>
html {
	background-image: url("http://www.designbolts.com/wp-content/uploads/2014/03/Marron-Mixed-High-resolution-blurr-background1.jpg");
}
h2 {
	font-family: "Rockwell";
	font-size: 45px;
}
	
ul {
	font-family: "Cambria";
	font-size: 20px;
	color: white;
	margin-left: 100px;
	margin-right: 100px;
	margin-top: 100px;
	align-content: left;
}	
	
h3 {
	text-align: center;	
}
	
</style>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>To-Do List</title>
	<h2>To-Do List</h2>
</head>
<body>

<ul>
    <li>
        <form method="post">
            <input class="index" type="hidden" name="index" />
            <input name="title" value="" />

            <button name="action" value="update">
                <span>Update</span>
            </button>

            <button name="action" value="delete">
                <span>Delete</span>
            </button>

            <button name="action" value="check">
                <span>Check</span>
            </button>
        </form>
    </li>
</ul>

<?php
	
namespace App\Page;

class Index extends \Gt\Page\Logic {

public function go() {
    $taskList = [];

    if(isset($_POST["action"])) {
        switch($_POST["action"]) {
        case "add":
            break;

        case "delete":
            break;

        case "update":
            break;

        case "check":
            break;
        }
    }

    foreach ($taskList as $i => $task) {
    }

}

}
	
	
	
	
	if(isset($_SESSION['First Name'])){
        	echo "Welcome '{$_SESSION['First Name']}'";
	}
	
	$query = mysql_query("SELECT * FROM Account where Email = '$_POST[Email]' AND Password = '$_POST[Password]'") or die(mysql_error()); $row = mysql_fetch_array($query) or die(mysql_error()); if(!empty($row['Email']) AND !empty($row['Password'])) { $_SESSION['Email'] = $row['Password']; echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE..."; } else { echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; }
			
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
