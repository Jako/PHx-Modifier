<?php
/*
 * description: counts the members of a comma separated list
 * usage: [+string:countlist+]
 */

$list = explode(",", $output);
if ($output == '') {
	return '0';
} else {
	return count($list);
}
