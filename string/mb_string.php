<?php 
header('Content-type:text/html;charset=utf8');
$str = '我是中国人 ok?';
echo mb_substr($str, 0,2);

echo substr($str, 0,2);