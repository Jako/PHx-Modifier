<?php
/*
 * description: Returns the content of a chunk if a phx expression is true
 * reason:      PHx has one big problem with 'then' or 'else' constructs because the modx-parser 
 *              inserts all (visible) chunks at the beginning of the parsing process. 
 *              PHx parses then snippets and the phx-logic from inside to outside 
 *              (i.e. snippet-calls inside of snippets-parameters were executed first).
 *              Also every snippet in the then or else branch will be executed even if the
 *              phx expression is not hit - only the output is surpressed.
 *              This modifier solves this.
 * usage:       [+phx:if=`condition`:eq=`condition`:thenc=`chunkname`+]
 */

global $modx;

$conditional = implode(' ', $condition);
$isvalid = intval(eval("return (" . $conditional . ");"));
if ($isvalid) {
	$output = $modx->getChunk($options);
} else {
	$output = NULL;
}
return $output;
