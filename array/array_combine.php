<?php 

$arr1 = ['a','b','c'];
$arr2 = ['ni','fa','fa'];

// 一个提供键 一个提供值
$result = array_combine($arr1, $arr2);
var_dump($result);