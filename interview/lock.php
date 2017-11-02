<?php 
// 实现一个多个进程同时写入一个文件的程序

// 核心：加锁

$file = fopen('1.txt','w+');
if(flock($file,LOCK_EX ))
{
	fwrite($file, 'haha');
	flock($file, LOCK_UN);
}
else
{
	echo '请等待';
}
fclose($file);