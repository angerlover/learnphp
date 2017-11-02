<?php 

// 手机号只有[01235689]范围内
$arr = ['13800214312','18578219102','13192288561'];


// 用补集的思想
$pattern = '/^[^47]{11}$/';

foreach ($arr as $k=>$v) 
{
	preg_match_all($pattern, $v, $match);
	var_dump($match);
}