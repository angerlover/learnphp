<?php 
//统计字符串每个字符出现的次数
$str = 'hhhello';
$result = count_chars($str,1); // 只列出大于1次的
foreach($result as $key => $value)
{
	echo "有{$value}个".chr($key).'<br>';
}