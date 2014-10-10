<?php
/*
 * description: parses a string into unixtime with a format string
 * usage: [+string:strptime=`%d/%m/%Y %H:%M:%S`+]
 */

$options = isset($options) ? $options : "%d.%m.%Y %H:%M:%S";
$parsed = strptime($output, $options);
$output = mktime($parsed['tm_hour'], $parsed['tm_min'], $parsed['tm_sec'], $parsed['tm_mon'] + 1, $parsed['tm_mday'], $parsed['tm_year'] + 1900);
