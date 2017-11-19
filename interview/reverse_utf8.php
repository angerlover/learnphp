<?php 
// 反转一个UTF的字符串
function reverse_utf($str)
{
	return implode('',array_reverse(preg_split('//u', $str)));
}

echo reverse_utf('我是中国人');