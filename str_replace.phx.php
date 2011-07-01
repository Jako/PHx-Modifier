<?php 
/*
 * description: replaces a string in the placeholder
 * usage: [+string:str_replace=`search|replace`+]
 */

if (strlen($options) > 0) {
    $data = explode("|", trim($options), 2);
    $search = (! empty($data[0])) ? $data[0] : '';
    $replace = (! empty($data[1])) ? $data[1] : '';
    $result = str_replace($search, $replace, $output);
    return $result;
}
?>
