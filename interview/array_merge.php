<?php 
// 不需要内置函数来实现多个函数的合并
function array_merged()
{
	$result = [];
	$arrays = func_get_args();
	foreach ($arrays as $array) 
	{
		if(is_array($array))
		{
			foreach ($array as $value) 
			{
				$result[] = $value;	
			}
		}	
	}

	return $result;
}


// 测试
var_dump(array_merged([1,23,3],[5,4,78]));