<?php 
// 把一个回调函数左右在每一个数组元素上
$arr = ['hello','world'];
$arr1 = array_map('ucfirst',$arr);
print_r($arr1);