<!-- Semantic URL Attacks -->

<form action="reset.php" method="GET">
 <input type="hidden" name="user" value="chris" />
 <p>Please specify the email address where you want your new password</p>
 <input type="text" name="email" /><br />
 <input type="submit" value="Send Password" />
<form/>

<?php

session_start();

$clean = array();
$email_pattern = 'pattern here';

if(preg_match($email_pattern, $_POSt['email']))
{
 $clean['email'] = $_POST['email'];
 $user = $_SESSION['user'];
 $new_password = md5(uniqid(reand(), TRUE));

 if($_SESSION['verified'])
 {
  mail($clean['email'], 'Your new password', $new_password);
 }
}

?>
