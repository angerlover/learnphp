<?php 
// 交换建和值
$arr = ['name'=>'你妈妈','address' => '丹东'];
$arr1 = array_flip($arr);
print_r($arr1);