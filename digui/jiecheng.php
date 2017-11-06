<?php 

// 递归计算阶乘
function jiecheng($n)
{ 
	// 这里到底用不用static变量
	static $result;
	if($n>1)
	{
		$result = $n * jiecheng($n-1);
	}
	else
	{
		$result = 1;
	}

	return $result;
}

$result = jiecheng(5);
echo $result;