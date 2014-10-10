<?php
/*
 * description: surround not empty string with cdata tag
 * limitations: closing tag has to be replaced by a plugin - otherwise it is detected as closing snippet tag and will be removed by PHx
 * usage: [+string:cdata+] 
 */

$outer = '';

if (trim($output) != '') $outer = '<![CDATA[' . $output . '] ]>';
return $outer;
