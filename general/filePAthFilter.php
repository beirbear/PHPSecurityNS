<!-- This is a standard method that deal with filepath that user upload -->

<?php

$filename = $_POST['filename'];

while(strpos($filename, '..') !== FALSE)
{
   $filename = str_replace('..','.',$filename);
}

?>
