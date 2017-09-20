<?php 

// 不使用系统函数实现字符串反转
function reserve_str($str)
{
	// 获取字符串的最大下标
	$length = 0;
	for ($length=0; $str[$length] != null ; $length++) {;}
	$maxStrIndex = $length - 1;
	unset($length);

	// 反转
	for($start = 0,$end = $maxStrIndex;$start<$end;$start++,$end--)
	{
		$tmp = $str[$start];
		$str[$start] = $str[$end];
		$str[$end] = $tmp;
	}

	return $str;
}


$str = 'hello,world';
echo reserve_str($str);