<?php 
error_reporting(E_ALL); 

//二维数组按照指定的key来排序
function array_sort($arr,$keys,$type='desc')
{
	$one_array = $result = array();
	//二维变一维后排序
	foreach ($arr as $key => $value) 
	{
		$one_array[$key] = $value[$keys];
	}
	//排序
	if($type=='asc')
	{
		asort($one_array); // 根据value保留key的排序
	}
	else
	{
		arsort($one_array);
	}
	//reset($one_array);
	// 重新组织新的数组
	foreach ($one_array as $key => $value) 
	{
		$result[$key] = $arr[$key];
	}

	return $result;
}
//测试
$test = [
			['name'=>'nicky','age'=>34],
			['name'=>'nicky','age'=>56],
			['name'=>'nicky','age'=>2],
		
		];

print_r(array_sort($test,'age'));