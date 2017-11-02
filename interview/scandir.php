<?php 

// 遍历文件夹
function scanDir($path)
{
	static $res = [];
	if(is_dir($path))
	{
		if($handler = opendir($path))
		{
			 while($file = readdir($handler) !== false)
			{
				// 去掉 .. 和 .
				if($file != '.' && $file != '..')
				{
					if(is_dir($path.'/'.$file))
					{
						// 继续递归遍历
						$res[$file] = scanDir($path.'/'.$file);
					}
					else
					{
						 $res[] = $file.'\n';
					}
				}
			}
		}
		else
		{
			return '打开目录错误';
		}

		closedir($handler);
		return $res;
	}
	else
	{
		return '非法目录';
	}
}

var_dump(scanDir('./'));