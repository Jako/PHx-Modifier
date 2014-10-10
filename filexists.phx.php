<?php
/*
 * description: (conditional) will be set to true if the file exists
 * usage: [+filename:fileexists:then=`whatever`+]
 */

$condition[] = intval(file_exists(MODX_BASE_PATH . $output));
return;
