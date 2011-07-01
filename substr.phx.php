<?php 
/*
 * description: returns a substring of the placeholder
 * usage: [+string:substr=`0,-3`+] - cuts the last three chars of the placeholder
 */

if (strlen($options) > 0) {
    $data = explode(",", trim($options), 2);
    $start = (! empty($data[0]) && is_numeric($data[0])) ? $data[0] : 0;
    $length = (! empty($data[1])) ? $data[1] : 0;
    $result = substr($output, $start, $length);
    return $result;
}
?>
