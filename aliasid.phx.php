<?php
/*
 * description: returns id from a given alias (should be unique) or a default value
 * limitations: does not work with duplicated aliases
 * usage: [+alias:aliasid=`default`+]
 */
$sc = $this->getFullTableName("site_content");
$result = $modx->db->select('*', $sc, 'alias ="'.$output.'" AND published="1" AND deleted="0"');
if ($modx->db->getRecordCount($result) >= 1) {
	$id = $modx->db->getRow($result);
    return $id['id'];
} else {
    return $options;
}
?>
