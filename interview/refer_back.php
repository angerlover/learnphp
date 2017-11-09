<?php 
// 函数的引用返回 
// 1：函数名字带& 2:使用的时候也用&
function &test()
{
	static $a = 5;
	return $a;
}

$b = &test();
$b = 100;
echo test(); // 100