<?php 
/*  
 * description: will be set to true if one value in a comma separated list is true (not eqal 0 or empty string)
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
