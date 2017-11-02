<?php 
// 或者的用法
// 查询只有数字或者字母组成的单词
$str = 'hello o2o 2b9 250';
$pattern = '/\b[a-zA-Z]+\b|\b\d+\b/';
preg_match_all($pattern, $str, $match);
// var_dump($match);


// 查询苹果系列的产品
$str2 = 'ipad,iphone,imac,ipod,iamsorry';
$patter2 = '/\bi(pad|phone|mac|pod)\b/';
preg_match_all($patter2, $str2, $match2);
var_dump($match2);