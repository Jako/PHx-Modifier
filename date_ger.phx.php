<?php
/*
 * description: returns german date
 * usage: [+string:date_ger=`format`+]
 */

$format = (strlen($options) > 0) ? $options : '%A, %e. %B %Y';
setlocale(LC_TIME, 'de_DE.UTF-8');
$date_ger = strftime($format, 0 + $output);
return $date_ger;
