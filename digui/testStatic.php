<?php 
// static在递归的时候到底用不用
function test($n)
{
	$res = [];
	if($n>1)
	{
		$res[$n] = test($n-1);
	}
	else
	{
		$res[] = $n;
	}

	return $res;
}

var_dump(test(3));