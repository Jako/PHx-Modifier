<?php
/*
 * description: surrounds the placeholder by an <a>-tag
 * usage: [+string:hyperlink+]
 */

if (substr($output, 0, 7) == "http://")
	$output = substr($output, 7);
if ($output != '')
	$output = '<a href="http://' . $output . '">' . $output . '</a>';
return $output;
?>
