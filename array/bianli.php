<?php 

// 用while list each遍历数组
$arr = [0=>'nafa','am'=>123];

while(list($k,$v) = each($arr))
{
	echo $k .'='.$v;
}