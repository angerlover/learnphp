<?php 

// 替换

$str = 'hello   wrold  cao    ni 		ma';
$pattern = '/\s+/';
$result = preg_replace($pattern,'',$str);
var_dump($result);