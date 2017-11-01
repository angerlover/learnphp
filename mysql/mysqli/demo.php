<?php 

// 练习使用mysqli操作数据库
$mysqli = new mysqli('localhost','root','root');
$mysqli->select_db('review');
$result = $mysqli->query('select * from msg');
// 索引数组
while ($row = $result->fetch_row()) 
{
	var_dump($row);
}
// 关联数组
// while ($row = $result->fetch_object()) 
// {
// 	var_dump($row);
// }
// 关联和索引数组都有
// while ($row = $result->fetch_array()) 
// {
// 	var_dump($row);
// }

