<?php 
// 递归的拷贝目录

function recurse_copy($src,$dest)
{
	// 打开原文件夹
	$handle = opendir($src);
	@mkdir($dest);
	if($handle !== false)
	{
		while($file = readdir($handle))
		{
			if($file != '.' && $file != '..')
			{
				// 如果是文件夹递归
				if(is_dir($src.DIRECTORY_SEPARATOR.$file))
				{
					recurse_copy($src.DIRECTORY_SEPARATOR.$file,$dest.DIRECTORY_SEPARATOR.$file);
				}
				// 其他情况直接复制
				else
				{
					// copy函数本身就具备删除已有冲突的能力
					$result = copy($src.DIRECTORY_SEPARATOR.$file,$dest.DIRECTORY_SEPARATOR.$file);
					if(!$result)
					{
						exit('fail to copy files!');
					}
				}
				
			}
		}

	}
	else
	{
		exit('fail to open source folder');
	}
	closedir($handle);
}


// 测试
recurse_copy('./a','./b/a');