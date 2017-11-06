<?php 
// 冒泡排序 卧槽尼玛确实是我自己写的了
function bubbleSort(&$arr)
{
	// 获取长度
	$len = count($arr);
	// return $len;
	for ($i=1; $i < $len; $i++) 
	{ 
		for ($j=0; $j<$len-$i ; $j++) 
		{ 
			if($arr[$j] > $arr[$j+1])
			{
				// 替换
				$temp = $arr[$j];
				$arr[$j] = $arr[$j+1];
				$arr[$j+1] = $temp;
			}
		}
	}


}

// 测试
$arr = [1,32,56,19];
bubbleSort($arr);
print_r($arr);