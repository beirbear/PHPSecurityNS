<!-- This method is a standard way to check for passing get and post variable to make sure that the data is exist and set into the system -->
<?php

$search = '';

if(isset($_GET['search']))
{
    $search = $_GET['search'];
}

?>
