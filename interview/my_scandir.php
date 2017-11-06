<?php 

// 遍历文件夹
function my_scanDir($path)
{
	$res = [];
	if(is_dir($path))
	{
		if($handler = opendir($path))
		{
			 while(($file = readdir($handler)) !== false)
			{
				// 去掉 .. 和 .
				if($file != '.' && $file != '..')
				{
					if(is_dir($path.'/'.$file))
					{
						// 继续递归遍历
						$res[$file] = my_scanDir($path.'/'.$file);
					}
					else
					{
						$res[] = $path.'/'.$file;
					}
				}
			}
			closedir($handler);
			return $res;

		}
		else
		{
			return '打开目录错误';
		}

		
	}
	else
	{
		return '非法目录';
	}
}

var_dump(my_scanDir('/Users/pepe/Documents/文档'));