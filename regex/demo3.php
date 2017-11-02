<?php 

// 找纯字母的单词
$arr = ['b2b','o2o','kiss','nicky'];
$pattern = '/\b[a-zA-Z]+\b/';
foreach ($arr as $k=>$v)
{
	preg_match_all($pattern, $v, $match);
	var_dump($match);
}