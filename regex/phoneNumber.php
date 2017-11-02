<?php 
// 采集手机号
$str = '王先生,买什么了 电话13800138000, 座机18902587413, QQ:258963,emai
l:wang@qq.com, 哈哈,身份证号:101101197912123039';

$pattern = '/\b1[358]\d{9}\b/';
preg_match_all($pattern, $str, $match);
var_dump($match);