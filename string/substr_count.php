<?php 
// 统计一个字符串在另一个字符串出现的次数
$str = 'hello again hello';
echo substr_count($str, 'hello'); // 2 
echo '<hr>';
// 再试一个
echo substr_count($str, 'l');