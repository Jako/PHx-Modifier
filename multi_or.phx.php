<?php 
/*  
 * description: the values in a comma separated list are joined by a boolean OR
 * usage: [+phx:multi_or=`[+value1+],[+value2+]`:then=`one is true`+]
 */

$options = explode(',', $options);
$ok = '0';
foreach ($options as $option) {
    if ($option) {
        $ok = '1';
    }
}
$condition[] = $ok;
return;
?>
