<?php 
/*
 * description: will be set to true if the string is not a members of a comma separated list
 * usage: [+string:notinlist=`text1,text2`:then=`not contained`+]
 */

$list = explode(",", $options);
$condition[] = intval(!in_array($output, $list));
return;
