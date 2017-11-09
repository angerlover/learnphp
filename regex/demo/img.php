<?php 
// 匹配所有img标签中的src值
$str = "<img alt='五码' src='av.jpg' id='av' />";
$pattern = "/<img.*?src='(.*?)'.*?\/?>/";
preg_match_all($pattern, $str, $match);
var_dump($match);