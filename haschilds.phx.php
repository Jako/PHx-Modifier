<?php
/*
 * description: (conditional) will be set to true if the id has childs
 * usage: [+id:haschilds:then=`…`:else=`…`+]
 */

$children = $modx->getChildIds($output, 1);
$condition[] = (count($children) > 0) ? 1 : 0;
