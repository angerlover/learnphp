<?php 
// 一个关于运算符优先级的问题
$a = 0;
$b = 0;
if($a = 3 > 0 || $b = 3 > 0)
{
	// $a++;
	// $b++;
	echo $a."\n";
	echo $b."\n";
}