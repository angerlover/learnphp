<?php 
// 不使用第三个变量来交换
$a = 'php';
$b = 'mysql';

list($b,$a) = array($a,$b);
echo $a,$b;