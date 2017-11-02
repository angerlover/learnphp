<?php 
// 写出一个能创建多级目录的函数
function createDir($path,$mode = 0777)
{
	if (is_dir($path)) 
	{
		echo $path.'已经存在';	
		return ;
	}
	else
	{
		if(mkdir($path,$mode,true)) //第三个参数就是递归了
		{
			echo '创建成功';
		}
		else
		{
			echo '创建失败';
		}
	}
}

// 测试
createDir('./xixi/a');