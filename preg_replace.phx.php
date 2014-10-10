<?php
/*
 * description: preg_replace string
 * usage: [+string:preg_replace=`search|replace`+] 
 */

$options = explode("|", $options);
$replaced = '';

if (trim($output) != '') {
	$replaced = preg_replace($options[0], $options[1], $output);
}
return $replaced;
