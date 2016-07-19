<?php
require 'learnphp.php';

$query = "SELECT * FROM practice";
if($validate = mysql_query($query))
{
	echo "query executed";
	while($query_execute = mysql_fetch_assoc($validate)){
		echo '<table border="1"><tr><td>'.$query_execute['FirstName'].'</td><td>'.$query_execute['LastName'].'</td><td>'.$query_execute['Email'].'</td><td>'.$query_execute['Password'].'</td></tr></table>';
		
		}
	}
	else{
		echo "query not executed";
		}

?>