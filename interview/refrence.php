<?php 

// 引用传递的面试题
$data = ['a','b','c'];

foreach ($data as $key => $value) 
{
	$value = &$data[$key];
}
var_dump($data);
// 问每一步的值是多少，最终的值是多少？
// ['b','c','c']