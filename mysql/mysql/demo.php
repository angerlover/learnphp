<?php 

// 使用mysql_connect操作数据库
 $conn = mysql_connect('localhost','root','root');
 mysql_select_db('review',$conn);

$result = mysql_query('select * from a');
// mysql_fetch_array的方式返回的数组既有索引又有关联，可谓大全
// while ($row = mysql_fetch_array($result)) 
// {
// 	var_dump($row['id']);	
// }

// 这种方式只有关联的形式：每一行都是字段名称作为key啦
// while($row = mysql_fetch_assoc($result))
// {
// 	var_dump($row);
// }


// 这种方式只有索引数组啦 0,1,2 比较蛋疼
while($row = mysql_fetch_row($result))
{
	var_dump($row);
}
mysql_close($conn);