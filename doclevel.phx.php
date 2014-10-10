<?php
/*
 * description: returns the doclevel of a given docid
 * usage: [+docid:doclevel+]
 * author: stefan
 */

$docid = ($output) ? $output : $modx->documentObject['id'];
return count($modx->getParentIds($docid));
