<?php 

// 读取文件内容到字符串
$users = file_get_contents("users.txt");
// users把每一行放入数组
$users = explode("\n", $users);

