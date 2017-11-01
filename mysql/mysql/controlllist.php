<?php 
$conn = mysql_connect('localhost','root','root');
mysql_select_db('review');
mysql_set_charset('utf8');
$result = mysql_query('select * from msg');
$res = [];
while($row = mysql_fetch_assoc($result))
{
 	$res[] = $row;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<a href="add.php">添加新留言</a>
	<table>
		<tbody>
			<tr>
				<td>id</td>
				<td>姓名</td>
				<td>内容</td>
			</tr>
			<?php foreach ($res as $key => $value): ?>
			<tr>
				<td><?php echo $value['id'] ?></td>
				<td><?php echo $value['name'] ?></td>
				<td><?php echo $value['content'] ?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>
