<?php
/*
 * description: returns date/time range
 * usage: [+phx:input=`[+start+]-[+end+]`:datetimerange+]
 */

// config options
setlocale (LC_ALL, 'de_DE.UTF8');
$untilString = '–';
$showZeroMinutes = true;

// modifier code
$format = (strlen($options) > 0) ? $options : '%e.| %B |%Y|, |%H|:%M| Uhr';
$format = explode('|', $format);
if (count($format) != 7) {
	$format = explode('|', '%e.| %B |%Y|, |%H|:%M| Uhr');
}

$dates = explode('-', trim($output), 2);
if (intval($dates[1]) > intval($dates[0])) {

	$start_minute = date('i', 0 + $dates[0]);
	$start_hour = date('G', 0 + $dates[0]);
	$start_day = date('d', 0 + $dates[0]);
	$start_month = date('m', 0 + $dates[0]);
	$start_year = date('Y', 0 + $dates[0]);

	$end_minute = date('i', 0 + $dates[1]);
	$end_hour = date('G', 0 + $dates[1]);
	$end_day = date('d', 0 + $dates[1]);
	$end_month = date('m', 0 + $dates[1]);
	$end_year = date('Y', 0 + $dates[1]);

	if ((date('G', 0 + $dates[0]) + date('i', 0 + $dates[0]) + date('G', 0 + $dates[1]) + date('i', 0 + $dates[1])) == 0) {
		// no hours/minutes set
		if ($start_year != $end_year) {
			$start = strftime($format[0] . $format[1] . $format[2], 0 + $dates[0]) . $untilString;
		} elseif ($start_month != $end_month) {
			$start = strftime($format[0] . $format[1], 0 + $dates[0]) . $untilString;
		} elseif ($start_day != $end_day) {
			$start = strftime($format[0], 0 + $dates[0]) . $untilString;
		} else {
			$start = '';
		}
		$end = strftime($format[0] . $format[1] . $format[2], 0 + $dates[1]);
		if (substr($options, 0, 1) != ' ') {
			$end = trim($end, ' ');
		}
	} else {
		if ($start_year != $end_year || $start_month != $end_month || $start_day != $end_day) {
			$start = strftime($format[0] . $format[1] . $format[2] . $format[3] . $format[4] . $format[5] . $format[6], 0 + $dates[0]) . $untilString;
			$end = strftime($format[0] . $format[1] . $format[2] . $format[3] . $format[4] . $format[5] . $format[6], 0 + $dates[1]);
			if (substr($options, 0, 1) != ' ') {
				$end = trim($end, ' ');
			}
		} else {
			if ($start_hour == 0 && $start_minute == 0) {
				$start = strftime($format[0] . $format[1] . $format[2], 0 + $dates[0]) . ' –';
			} elseif ($start_minute == 0 && !$showZeroMinutes) {
				$start = strftime($format[0] . $format[1] . $format[2] . $format[3] . $format[4], 0 + $dates[0]) . $untilString;
			} else {
				$start = strftime($format[0] . $format[1] . $format[2] . $format[3] . $format[4] . $format[5], 0 + $dates[0]) . $untilString;
			}
			$end = strftime($format[4] . $format[5] . $format[6], 0 + $dates[1]);
		}
	}
	$output = $start . $end;
} else {
	if ((date('G', 0 + $dates[0]) + date('i', 0 + $dates[0])) > 0) {
		$output = strftime($format[0] . $format[1] . $format[2] . $format[3] . $format[4] . $format[5] . $format[6], 0 + $dates[0]);
	} else {
		$output = strftime($format[0] . $format[1] . $format[2], 0 + $dates[0]);
	}
}

if (substr($options, 0, 1) != ' ') {
	$output = trim($output, ' ');
}
return $output;
