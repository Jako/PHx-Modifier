<?php
/*
 * Returns the JSON representation of the string
 * usage: [+string:jsonencode=`stripouterquotes`+]
 * stripouterquotes could be 1 or 0
 */

$output = json_encode($output);
$stripquotes = ($options == '1') ? TRUE : FALSE;
if ($stripquotes) {
	$output = trim($output, '"');
}
return $output;
