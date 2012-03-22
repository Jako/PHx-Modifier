<?php
/*
 * description: returns daterange
 * usage: [+phx:input=`[+start+]-[+end+]`:daterange+]
 * 
 */

$format = (strlen($options) > 0) ? $options : '%d.|%m.|%Y';
$format = explode('|', $format);
if (count($format) != 3) {
	$format = explode('|', '%d.|%m.|%Y');
}

$dates = explode('-', $output);
if (!isset($dates[1])) {
	return strftime($format[0] . $format[1] . $format[2], 0 + $dates[0]);
}
$end = strftime($format[0] . $format[1] . $format[2], 0 + $dates[1]);

$start_day = date('d', $dates[0]);
$start_month = date('m', $dates[0]);
$start_year = date('Y', $dates[0]);

$end_day = date('d', $dates[1]);
$end_month = date('m', $dates[1]);
$end_year = date('Y', $dates[1]);

if ($start_year != $end_year) {
	$start = strftime($format[0] . $format[1] . $format[2], 0 + $dates[0]) . '-';
} elseif ($start_month != $end_month) {
	$start = strftime($format[0] . $format[1], 0 + $dates[0]) . '-';
} elseif ($start_day != $end_day) {
	$start = strftime($format[0], 0 + $dates[0]) . '–';
} else {
	$start = '';
}

return $start . $end;
?>
