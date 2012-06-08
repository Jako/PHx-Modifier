<?php
/*
 * description: iterate counter for PHx
 * reason:      for snippets that have not an iteration counter
 * usage:       [+phx:iterate=`countername`+]
 */

$countername = ($options) ? 'phx_' . $options : 'phx_iterate_counter';

if (isset($GLOBALS[$countername])) {
	$GLOBALS[$countername]++;
} else {
	$GLOBALS[$countername] = 0;
}
return $GLOBALS[$countername];
?>
