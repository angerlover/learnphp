<?php 

$pdo = new PDO('mysql:host=localhost;dbname=review','root','root');
$result = $pdo->query('select * from msg');
// 关联+索引
foreach($result as $row)
{
	var_dump($row);
}