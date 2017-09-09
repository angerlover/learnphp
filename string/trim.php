<?php 

$str1 = " hello\r\t";
// 单引号的字符串trim函数无法去除右边的啊。。。
$str2 = ' hello\r\t';
$str1_trim = trim($str1);
$str2_trim = trim($str2);
$str2_rtrim = trim($str2);
echo $str1_trim;
echo $str2_trim;
echo $str2_rtrim;