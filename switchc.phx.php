<?php
/*
 * description: switch chunks for PHx
 * reason:      PHx has one big problem with (visible) chunks at the beginning of the parsing process. They would be evaluated regardless of beeing shown. 
 *              And the internal select modifier of PHx does not provide a default option
 * usage:       [+string:switchc=`xx:chunkname|yy:chunkname|default:chunkname+]
 */

$switches = explode('|', $options);
$default = '';
foreach ($switches as $switch) {
	$switch = explode(':', $switch, 2);
	if ($switch[0] == $output) {
		return $modx->getChunk($switch[1]);
	} elseif ($switch[0] == 'default') {
		$default = $modx->getChunk($switch[1]);
	}
}
return $default;
