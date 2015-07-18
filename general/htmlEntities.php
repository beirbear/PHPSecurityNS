<!-- Ensure that special characters are not interpreted by the browser when send the information back to the users -->

<?php

$html = array();

$html['username'] = htmlentities($clean['username'], ENT_QUOTES, 'UTF-8');

echo "<p>Welcome back, {$html['username']}.</p>";

?>
