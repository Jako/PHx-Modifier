<?php
/*
 * description: iteration counter for PHx for snippets that have not an iteration counter
 * usage:       [+phx:iteration=`countername`+]
 */

$countername = ($options) ? 'phx_' . $options : 'phx_iterate_counter';

if (isset($GLOBALS[$countername])) {
	$GLOBALS[$countername]++;
} else {
	$GLOBALS[$countername] = 0;
}
return $GLOBALS[$countername];
