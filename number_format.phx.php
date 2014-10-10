<?php
/*
 * description: number format a string
 * usage: [+string:number_format=`decimals|dec_point|thousands_sep`+]
 * dec_point|thousands_sep are optional
 */

if (!trim($output)) {
	$options = explode('|', $options);
	if (count($options) == 3) {
		return number_format($output, (int) $options[0], $options[1], $options[2]);
	} else {
		return number_format($output, (int) $options[0]);
	}
} else {
	return '';
}
