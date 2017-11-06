<?php 
// 计算一个路径相对于另一个路径的位置
function relative_path($path1,$path2)
{
	// 把路径字符串转化为数组
	$arr1 = explode('/', dirname($path1));
	$arr2 = explode('/', dirname($path2));


	// 通过i的值判断是否在同一个跟目录下以及相差的等级
	for($i = 0,$len = count($arr2);$i<$len;$i++)
	{
		if($arr1[$i] != $arr2[$i])
		{
			break;
		}
	}
	// 根目录不同 返回空
	if($i==1)
	{
		$return_path = [];
	}
	// 根目录相同
	if($i != 1 && $i < $len)
	{
		// 相差的多少就有多个..
		$return_path = array_fill(0,$len-$i,'..');
	}
	// 在同一个目录下 直接返回当前路径./
	if($i == $len)
	{
		$return_path = ['./'];
	}
	//拼接返回的字符串
	$retrun_path = array_merge($return_path,array_slice($arr1, $i));
	return implode('/',$return_path);
}


// 测试
echo relative_path('/a/b/c/d/e.php','/a/b/fa/fs/er.php');
