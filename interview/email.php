<?php 
// 匹配email
$email = 'daituwyp@126.com';
$pattern = '/^[\w\-\.]+@[\w\-]+(\.\w+)$/';
preg_match_all($pattern, $email, $match);
var_dump($match);
