<?php 
/*
 * description: compares input with the members of a comma separated list
 * usage: [+string:inlist=`text1,text2`:then=`contained`+]
 */

$list = explode(",", $options);
$condition[] = intval(in_array($output, $list));
return;
?>
