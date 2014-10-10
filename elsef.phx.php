<?php
/*
 * description: Returns the content of a file if a phx expression is false
 * reason:      PHx has one big problem with 'then' or 'else' constructs because the modx-parser
 *              inserts all chunks at the beginning of the parsing process.
 *              PHx parses then snippets and the phx-logic from inside to outside
 *              (i.e. snippet-calls inside of snippets-parameters were executed first).
 *              Also every snippet in the then or else branch will be executed even if the
 *              phx expression is not hit - only the output is surpressed.
 *              This modifier solves this. The filename starts at webroot.
 * usage:       [+phx:if=`condition`:eq=`condition`:then=``:elsef=`filename`+]
 */

global $modx;

$conditional = implode(' ', $condition);
$isvalid = intval(eval("return (" . $conditional . ");"));
$filename = trim($options);
if (!$isvalid) {
	if (!empty($filename)) {
		$filename = MODX_BASE_PATH . $filename;
		if (!function_exists('file_get_contents')) {
			$fhandle = fopen($filename, "r");
			$fcontents = fread($fhandle, filesize($filename));
			fclose($fhandle);
		} else {
			$fcontents = file_get_contents($filename);
		}
		$output = $fcontents;
	} else {
		$output = '';
	}
}
return $output;
