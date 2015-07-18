<!-- This is a method that we encode string when we need to send sql back to the user -->

<?php

$mysql = array();

$mysql['username'] = mysql_real_escape_string($clean['username']);

$sql = "SELECT * 
	FROM profile 
	WHERE username = '$mysql['username']}'";

$result = mysql_query($sql);

?>
