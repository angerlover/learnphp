<?php 
header('Content-type:text/html;charset=utf8');
$str = 'nicky';
// 重复n次啦
echo str_repeat($str, 5);
echo '<br>';
// 次数乱写就是空字符串哦
echo '重复0次就是'.str_repeat($str, 0);