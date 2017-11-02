<?php 

// 贪婪模式（默认）
// 找出g***d
$str = 'ksda good goooood good kl s ja dfs dk ';
$pattern = '/\bg.+d\b/'; // 贪婪：good goooood good
preg_match_all($pattern, $str, $match);
var_dump($match);