<?php 

// 解析一个字符串
$str = 'name=nicky&sex=1';
parse_str($str,$url);
var_dump($url);


$str2 = 'name=nicky'