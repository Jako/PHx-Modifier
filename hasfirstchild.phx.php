<?php
/*
 * description: (conditional) will be set to true if the id has firstchild with a specified level
 * usage: [+id:hasfirstchild=`level`:then=`…`:else=`…`+]
 */

$level = (int) $options;

if (!function_exists('firstlevelchild')) {

	function firstlevelchild($id, $level) {
		global $modx;

		$children = $modx->getActiveChildren($id, 'menuindex', 'ASC');
		if (!$children === FALSE) {
			$firstLevelChild = $children[0]['id'];
			$level++;
			if ($level !== 0) {
				$firstLevelChild = firstlevelchild($firstLevelChild, $level);
			}
		} else {
			$firstLevelChild = FALSE;
		}
		return $firstLevelChild;
	}

}

$firstLevelChild = firstlevelchild($output, -$level);
$condition[] = ($firstLevelChild) ? 1 : 0;
