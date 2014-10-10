<?php
/*
 * description: returns the id of the first child of a resource with a specified level
 * usage: [+id:firstchild=`level`+]
 */

$level = (int) ($options) ? $options : 1;

if (!function_exists('firstlevelchilds')) {

	function firstlevelchilds($id, $level) {
		global $modx;

		$children = $modx->getActiveChildren($id, 'menuindex', 'ASC');
		if (!$children === FALSE) {
			$firstLevelChild = $children[0]['id'];
			$level++;
			if ($level !== 0) {
				$firstLevelChild = firstlevelchilds($firstLevelChild, $level);
			}
		} else {
			$firstLevelChild = FALSE;
		}
		return $firstLevelChild;
	}

}

return firstlevelchilds($output, -$level);
