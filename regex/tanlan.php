<?php 

// 贪婪模式（默认）
// 找出g***d
$str = 'ksda good goooood good kl s ja dfs dk ';
$pattern = '/\bg.+d\b/'; // 贪婪：good goooood good
preg_match_all($pattern, $str, $match);
// var_dump($match);


// 取消贪婪模式
$pattern2 = '/\bg.+?d\b/';
preg_match_all($pattern2, $str, $match2); // good goooood good
var_dump($match2);