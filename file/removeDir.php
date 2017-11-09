<?php 
// 删除目录
// 思路：打开一个目录，如果是文件则删除，如果是目录(readdir只有一个.)则递归
// 注意：空文件夹直接删除，如何判断是空文件夹？



// $handle = opendir('./to be removed');
// echo readdir($handle);


// function removeDir($dir)
// {
// 	if(is_dir($dir))
// 	{
// 		if($handle = opendir($dir))
// 		{
// 			while($file = readdir($handle))
// 			{
// 				// file类型则删除
// 				if(filetype($file) == 'file')
// 				{
// 					unlink($dir.'/'.$file);
// 				}
// 				// 非空文件夹则递归
// 				elseif(is_dir($file) && $file != '.' && $file != '..' )
// 				{
// 					removeDir($dir.'/'.$file);
// 				}
// 				// 空文件夹
// 				elseif($file == '.')
// 				{
// 					rmdir($dir.'/'.$file);
// 				}
// 			}
// 		}
// 		else
// 		{
// 			return '目录无法打开';
// 		}
// 	}
// 	else
// 	{
// 		return '目录非法';
// 	}
// }


// 改进版
function removeDir($dir)
{
	if($content = scandir($dir))
	{
		// 如果是一个空目录直接删除
		if(count($content) == 1 && $content[0] == '.')
		{
			rmdir($dir.'/'.$content[0]);
		}
		// 遍历结果
		foreach ($content as $value) 
		{
			if(filetype($dir.'/'.$value) == 'file')
			{
				unlink($dir.'/'.$value);
			}
			// 如果是目录继续递归
			if($value != '.' && $value != '..' && filetype($dir.'/'.$value) == 'dir')
			{
				removeDir($dir.'/'.$value);
			}	
		}
	}

	// 删除当前文件夹
	rmdir($dir);
	
}

// 测试
removeDir('./removed');
