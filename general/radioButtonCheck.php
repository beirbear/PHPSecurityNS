<!-- This is a standard method to check for radio button items to make sure that its correct -->

<select name="color">
 <option value="red">red</option>
 <option value="green">green</option>
 <option value="blue">blue</option>
</select>

<?php

$clean = array();

switch($_POST['color])
{
   case 'red':
   case 'green':
   case 'blue':
      $clean['color'] = $_POST['color'];
      break;
}

?>

