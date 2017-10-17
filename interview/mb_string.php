<?php 

$str1 = 'php';
echo strlen($str1); //3

$str2 = '我爱北京天安门23';
echo strlen($str2); // 3*7 =21

echo mb_strlen($str2); // 9 字符数 7个中文和2个英文


// 截取字符串
echo mb_substr($str2,2,3);

// 按照utf8的字符集来对字符串分隔，每个字符变成一个数组的元素
print_r(preg_split('//u', $str2,-1,PREG_SPLIT_NO_EMPTY));
