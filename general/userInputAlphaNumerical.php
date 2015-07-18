<!-- Standard input to make sure that user have input  only alphanumeric characters-->

<?php

$clean = array();

if(ctype_alnum($_POST['username']))
{
   $clean['username'] = $_POST['username'];
}

?>
