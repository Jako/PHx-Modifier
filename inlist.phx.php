<?php
/*
 * description: will be set to true if the string is a members of a comma separated list
 * usage: [+string:inlist=`text1,text2`:then=`contained`+]
 */

$list = explode(",", $options);
$condition[] = intval(in_array($output, $list));
return;
