<?php 
header('Content-Type:text/html;charset=utf8');
// 本脚本练习创建数组
$arr1 = array(1,2,3,4);
$arr2 = array('name'=>'nicky','age'=>45,56,21);

// 在创建的时候会把键转成整型数字
$arr4 = array('3'=>'kiss',45,123);
var_dump($arr4[3]);



// 一个比较奇怪的例子
$arr3 = array(true=>'a',1=>'b'); // 1覆盖了true true就是1
//echo 'arr3等于';
//var_dump($arr3);
