<?php 

if($_POST)
{
	// 添加到数据库
	$conn = mysql_connect('localhost','root','root');
	mysql_select_db('review');
	mysql_set_charset('utf8');
	$name = $_POST['name'];
	$content = $_POST['content'];
	$sql = "insert into msg (content) values('$content');";
	// var_dump($sql);die;
	if(mysql_query($sql))
	{
		echo '留言成功';
	}
	else
	{
		echo mysql_error();
		echo '留言 失败';
	}
}
else
{
	include 'add.html';
}