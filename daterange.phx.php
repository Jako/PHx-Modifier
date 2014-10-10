<?php
/*
 * description: returns daterange by removing equal days and months (and years - by showing only the start date)
 * usage: [+phx:input=`[+start+]-[+end+]`:daterange=`%d.|%m.|%Y`+]
 * format: each part of the date (separated by '|') could be formatted by strftime placeholder
 */

// config options
setlocale(LC_ALL, 'de_DE.UTF8');
$untilString = '–';

// modifier code
$format = (strlen($options) > 0) ? $options : '%d.|%m.|%Y';
$format = explode('|', $format);
if (count($format) != 3) {
	$format = explode('|', '%d.|%m.|%Y');
}

$dates = explode('-', $output);
if (isset($dates[1]) && !empty($dates[1])) {
	$end = strftime($format[0] . $format[1] . $format[2], 0 + $dates[1]);

	$start_day = date('d', 0 + $dates[0]);
	$start_month = date('m', 0 + $dates[0]);
	$start_year = date('Y', 0 + $dates[0]);

	$end_day = date('d', 0 + $dates[1]);
	$end_month = date('m', 0 + $dates[1]);
	$end_year = date('Y', 0 + $dates[1]);

	if ($start_year != $end_year) {
		$start = strftime($format[0] . $format[1] . $format[2], 0 + $dates[0]) . $untilString;
	} elseif ($start_month != $end_month) {
		$start = strftime($format[0] . $format[1], 0 + $dates[0]) . $untilString;
	} elseif ($start_day != $end_day) {
		$start = strftime($format[0], 0 + $dates[0]) . $untilString;
	} else {
		$start = '';
	}
	$output = $start . $end;
} else {
	$output = strftime($format[0] . $format[1] . $format[2], 0 + $dates[0]);
}
return $output;
