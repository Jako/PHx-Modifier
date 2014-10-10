<?php
/*
 * description: will be set to true if the string is not numeric
 * usage: [+string:isnotnumeric:then=`xxx`:else=`yyy`+]
 */

$condition[] = (!is_numeric($output)) ? '1' : '0';
return;
