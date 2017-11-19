<?php 
// 闭包
function getUser()
{
	$num = 1;
	$func = function() use(&$num)
	{
		echo $num;
		$num++;
	}; // 不要忘记这个

	return $func;
}

$temp = getUser();
$temp();
$temp();
$temp();