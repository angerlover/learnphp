<?php 
// 后向引用

// 寻找首字母和尾字母相同的单词

// 简化 首尾都是a的单词
$str = 'abfaa dfald preint fa';
$pattern = '/\ba\w+a\b/';


// 后向引用 
$pattern2 = '/\b([a-zA-Z])\w+\1\b/';
preg_match_all($pattern2, $str, $match);  // 会把子表达式的值作为数组的第二元素也返回，'a' 'd'
var_dump($match);
