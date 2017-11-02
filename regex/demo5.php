<?php 

// 替换的练习 都弄成god
$str = 'goood,goooood,good,';
$pattern = '/\bgo+d\b/';
$result = preg_replace($pattern, 'god', $str);
var_dump($result);