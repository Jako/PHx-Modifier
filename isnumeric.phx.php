<?php
/*
 * description: will be set to true if the string is numeric
 * usage: [+string:numeric:then=`xxx`:else=`yyy`+]
 */

$condition[] = (is_numeric($output)) ? '1' : '0';
return;
