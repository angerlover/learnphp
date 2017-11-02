<?php 
// 找123开头的手机号
$str = '12398071231';
$pattern = '/^123\d{8}$/';
preg_match($pattern,$str,$match);
var_dump($match);

