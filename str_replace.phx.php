<?php 
/*
 * description: replaces a string in the placeholder
 * usage: [+string:str_replace=`search|replace`+]
 */

if (strlen($options) > 0) {
    $data = explode("|", $options, 2);
    $search = (!isset($data[0])) ? $data[0] : '';
    $replace = (!isset($data[1])) ? $data[1] : '';
    $result = str_replace($search, $replace, $output);
    return $result;
}
?>
