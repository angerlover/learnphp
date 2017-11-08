<?php 
// file把整个文件读入一个数组中
$users = file('users.txt');
// var_dump($users);
foreach ($users as $key => $value) 
{
	list($name,$email) = explode(' ', $value);
	$email = trim($email);
	echo "<a href=\"mailto:$email \">$name</a>";
}


