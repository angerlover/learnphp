<?php 

// 获取表单内容
$content = $_POST['content'];
$name = $_POST['name'];


// 数据库配置
$dsn = 'mysql:dbname=nothing;host=localhost';
$username = 'root';
$pwd = 'root';
try 
{

  $pdo = new PDO($dsn,$username,$pwd);
  $sql = "insert into msg (name,content,created_at) values(:name,:content,:created_at)";
  $data = [':name'=>$name,
  			':content' => $content,
  			':created_at' => time()
		];

  $stmt = $pdo->prepare($sql);
  $stmt->execute($data);
  $rows = $stmt->rowCount();
  if($rows)
  {
  	exit('添加成功');
  }
  else
  {
  	exit('添加失败');
  }

} 
catch (Exception $e) 
{ 
	echo $e->getMessage();
}
