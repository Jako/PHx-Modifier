<?php
/*
 * description: returns a document field (defaults to pagetitle) of a given docid
 * usage: [+docid:docfield=`pagetitle`+]
 * author: bwente
 */

$field = (strlen($options) > 0) ? $options : 'pagetitle';
if ($output != '') {
	$docfield = $modx->getTemplateVarOutput(array($field), $output, 1);
	if (is_array($docfield) && isset($docfield[$field])) {
		$output = $docfield[$field];
	} else {
		$output = '';
	}
}
return $output;
