<?php 
/* 
 * description: will be set to true if all values in a comma separated list are true (not eqal 0 or empty string)
 * usage: [+phx:multi_and=`[+value1+],[+value2+]`:then=`one is true`+]
 */

$options = explode(',', $options);
$ok = '1';
if (count($options) == 0)
    $ok = '0';
foreach ($options as $option) {
    if (!$option)
        $ok = '0';
}
$condition[] = $ok;
return;
