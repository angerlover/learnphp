<?php 
// 分割 所有的空格符都分开
$str = 'hello cao ni 	ma';
$pattern = '/\s+/';

$result = preg_split($pattern,$str);
var_dump($result);