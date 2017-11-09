<?php 

// 测试include之后的变化
include '1_include.php';
function test()
{
	global $a;
	echo $a;
}

test(); 