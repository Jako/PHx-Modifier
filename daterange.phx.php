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

setlocale(LC_TIME, 'de_DE.UTF-8');
$dates = explode('-', $output);
if (!isset($dates[1])) {
	return strftime($format[0].$format[1].$format[2], 0 + $dates[0]);
}
$end = strftime($format[0].$format[1].$format[2], 0 + $dates[1]);

if (date('d', ($dates[1] - $dates[0])) == 1 && date('m', ($dates[1] - $dates[0])) == 1 && date('Y', ($dates[1] - $dates[0])) == 1970) {
	$start = '';
} elseif (date('d', ($dates[1] - $dates[0])) > 1 && date('m', ($dates[1] - $dates[0])) == 1 && date('Y', ($dates[1] - $dates[0])) == 1970) {
	$start = strftime($format[0], 0 + $dates[0]).'–';
} elseif (date('d', ($dates[1] - $dates[0])) > 1 && date('m', ($dates[1] - $dates[0])) > 1 && date('Y', ($dates[1] - $dates[0])) == 1970) {
	$start = strftime($format[0].$format[1], 0 + $dates[0]).'–';
} else {
	$start = strftime($format[0].$format[1].$format[2], 0 + $dates[0]).'–';
}
return $start.$end;
?>
