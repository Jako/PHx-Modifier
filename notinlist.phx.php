<?php 
/*
 * description: compares input with the members of a comma separated list
 * usage: [+string:notinlist=`text1,text2`:then=`not contained`+]
 */

$list = explode(",", $options);
$condition[] = intval(!in_array($output, $list));
return;
?>
