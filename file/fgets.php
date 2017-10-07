<?php 

$file = fopen('users.txt','r');
echo fgets($file,1);
// while(!feof($file))
// {
// 	echo fgets($file);
// }

fclose($file);