<?php
/*
 * description: checks if the string is numeric
 * usage: [+string:isnotnumeric:then=`xxx`:else=`yyy`+]
 */

$condition[] = (!is_numeric($output)) ? '1' : '0';
return;
?>