<?php 
// 从一个url中提取文件的扩展名，例如http://www.sina.com/a/vb/df.php?id=1

function getExt($url)
{
	$arr = parse_url($url);
	$path = $arr['path']; // /a/vb/df.php
	return strstr($path,'.');
}

$url = 'http://www.sina.com/a/vb/df.php?id=1';
echo getExt($url);