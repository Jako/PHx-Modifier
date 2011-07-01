<?php 
/*
 * description: swich for PHx
 * reason:      The internal select modifier of PHx does not provide a default option
 * usage:       [+id:switch=`1:{{Chunk}}|2:[*DocVar*]|default:[+TemplateVar+]+]
 */

$switches = explode('|', $options);
foreach ($switches as $switch) {
    $switch = explode(':', $switch);
    if ($output == $switch[0] || $switch[0] == 'default')
        return $switch[1];
}
return '';
?>
