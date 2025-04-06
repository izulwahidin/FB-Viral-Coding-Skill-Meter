<?php
function getConsistentIndex($name, $arr)
{
    $hash = crc32($name);
    $index = abs($hash % count($arr));
    return $arr[$index];
}

$strToTitle = fn($string) => ucwords(strtolower($string));
