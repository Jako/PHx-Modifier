<?php
/*
 * description: returns a substring of a string
 * usage: [+string:substr=`0,-3`+] - cuts the last three chars of the placeholder
 */

if (strlen($options) > 0) {
	$data = explode(",", trim($options), 2);
	$start = (!empty($data[0])) ? intval($data[0]) : 0;
	if (!empty($data[1])) {
		$result = substr($output, $start, intval($data[1]));
	} else {
		$result = substr($output, $start);
	}
} else {
	$result = $output;
}
return $result;
