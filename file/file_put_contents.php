<?php 

// 这个函数其实就是fwrite的一种封装

if(is_writable('users.txt'))
{
	file_put_contents('users.txt', '我很好',FILE_APPEND|LOCK_EX);
}