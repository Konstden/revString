<?php
function myrev($str) {
    $len = strlen($str);
    for ($i = 0; $i < $len / 2; $i++) {
        $a = $str[$i];
        $str[$i] = $str[$len - $i - 1];
        $str[$len - $i - 1] = $a;
    }
    return $str; 
}
    echo myrev("This is a reversed string");