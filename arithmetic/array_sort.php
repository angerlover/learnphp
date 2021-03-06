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


/******尝试用另一种算法 ******/

/**
 * Short description.
 * @param   type    $varname    description
 * @return  type    description
 * @access  public or private
 * @static  makes the class property accessible without needing an instantiation of the class
 */
function array_sort2($arr,$keys,$type='desc')
{
	$temp = $ret = [];
	// 直接把字段提取到一个数组中
	foreach($arr as $k=>$v)
	{
		$temp[] = $v[$keys];
	}
	// 排序一维数组
	if ($type == 'desc') 
	{
		arsort($temp);
	}
	else
	{
		asort($temp);
	}

	foreach($temp as $k=>$v)
	{
		$ret[$k][] = $arr[$k];
	}

	return $ret;
	
    
}

//测试
$test = [
			['name'=>'nicky','age'=>34],
			['name'=>'nicky','age'=>56],
			['name'=>'nicky','age'=>2],
		
		];

print_r(array_sort2($test,'age','asc'));