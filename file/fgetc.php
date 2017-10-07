<?php 
// fgetc 读取一个字符
$file = fopen('users.txt', 'r');
echo fgetc($file);
echo fgetc($file);
// while(!feof($file))
// {
// 	echo fgetc($file);
// }
fclose($file);