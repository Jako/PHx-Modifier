<?php
/*
 * description: returns id from a given alias (should be unique) or a default value
 * limitations: returns the first id for duplicate aliases
 * usage: [+alias:aliasid=`default`+]
 */

$result = $modx->db->select('*', $modx->getFullTableName("site_content"), 'alias ="' . $output . '" AND published="1" AND deleted="0"');
if ($modx->db->getRecordCount($result) >= 1) {
    $id = $modx->db->getRow($result);
    return $id['id'];
} else {
    return $options;
}
