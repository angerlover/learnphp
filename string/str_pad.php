<?php 

// 
$str = 'allen';
// 第四个参数默认是从右边填充
echo str_pad($str, 10,'1');
echo str_pad($str, 10,'~',STR_PAD_BOTH); // 两边填充
echo str_pad($str,6,'_____'); // 如果填充的字符串+原字符串 > 总长度 ，那么只能被截取一点了

// 稍微极端一点的情况:综述是负数或者小于$str的长度 就返回原字符串
echo str_pad($str,2,'1');