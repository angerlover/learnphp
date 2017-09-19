<?php 

$str1 = 'hello,nicky';
// 三个参数 ：查找 替换 字符串本体
echo str_replace('nicky', 'wangyunpeng', $str1);

$str2 = 'hello,nicky';
// 另外一个不区分大小写的版本
echo str_ireplace('NICKY', 'PEPE', $str2);
    