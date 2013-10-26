<?php
/*
 * description: returns a document field (defaults to pagetitle) of a given docid
 * usage: [+docid:docfield=`pagetitle`+]
 * author: bwente
 */

$field = (strlen($options) > 0) ? $options : 'pagetitle';
$docfield = $modx->getTemplateVarOutput(array($field), $output, 1);
return $docfield[$field];
?>
