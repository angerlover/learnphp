<?php 

// 用最少的代码求出三个值的最大值
function getBiggest($arr)
{
	if(count($arr)>3) return false;
	return $arr[0]>$arr[1]? ($arr[0]>$arr[2]?$arr[0]:$arr[2]): ($arr[1] > $arr[2]?$arr[1]:$arr[2]);
}

// 测试
$arr = [1,9,2];
echo getBiggest($arr);