<?php 
// 分隔字符串把1234567890 变成1,234,567,890

$str = '1234567890';
$str = strrev($str);
$str = chunk_split($str,3,',');
$str = strrev($str);
$str = ltrim($str,',');
echo $str;