<?php
/*
 * description: surround not empty string with text
 * usage: [+string:outer=`before|after`+]
 */

$options = explode("|", $options);
if (count($options) == 1) {
    $options[1] = '';
}
if (trim($output) != '') {
    return $options[0].$output.$options[1];
} else {
    return '';
}
