<?php

set_error_handler('my_error_handler');

function my_error_handler($number, $string, $file, $line, $context)
{
$error  = "===========\nPHP ERROR\n===========\n";
$error .= "Number: [$number]\n";
$error .= "String: [$string]\n";
$error .= "File: [$file]\n";
$error .= "Line: [$line]\n";
$error .= "Context:\n" . print_r($context, TRUE) . "\n\n";

error_log($error, 3, '~/log/error_log');
}

?>

