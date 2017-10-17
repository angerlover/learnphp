<?php
error_reporting(E_ALL);
function add_sth($str)
{
    $result = '';
    $result .= substr($str,0,1);
    $result .= ',';
    //return $result;
    for($i=1;$i<strlen($str);$i+=3)
   {
   		$sub = substr($str, $i,3);
   		if(strlen($sub)<3)
   		{
   			$result .= $sub;
   			break;
   		}
        $result .= $sub;
        $result .= ',';
   }
    
   return $result;

}

// 标准答案的做法
function str($str)
{
	// 反转
	$str = strrev($str);
	// 用，隔开
	$strrev = chunk_split($str,3,',');
	// 再次反转
	$str = strrev($strrev);
	// 去掉开始的那个，
	return ltrim($str,',');
}

// 测试函数
$str = '123456789';
// echo add_sth($str);
echo str($str);