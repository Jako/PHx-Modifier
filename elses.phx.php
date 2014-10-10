<?php
/*
 * description: Returns the result of a snippet call if a phx expression is true
 * reason:      PHx has one big problem with 'then' or 'else' constructs because the modx-parser
 *              inserts all (visible) chunks at the beginning of the parsing process.
 *              PHx parses then snippets and the phx-logic from inside to outside
 *              (i.e. snippet-calls inside of snippets-parameters were executed first).
 *              Also every snippet in the then or else branch will be executed even if the
 *              phx expression is not hit - only the output is surpressed.
 *              This modifier solves this and runs a snippet directly.
 * usage:       [+phx:if=`condition`:eq=`condition`:then=``:elses=`snippetname|param:value|param:value`+]
 */

global $modx;

$conditional = implode(' ', $condition);
$isvalid = intval(eval("return (" . $conditional . ");"));
if (!$isvalid) {
	$params = explode('|', $options, 2);
	$snippetName = $params[0];
	$params = explode('|', $params[1]);
	$snippetParams = array();
	foreach ($params as $param) {
		$param = explode(':', $param);
		if (isset($param[1]))
			$snippetParams[$param[0]] = $param[1];
	}
	$output = $modx->runSnippet($snippetName, $snippetParams);
}
return $output;
