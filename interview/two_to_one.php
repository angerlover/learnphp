<?php 
// 项目中的数组转换，在商城项目的ajax上传图片中

$pic = [

	'name' => [
		0 => 'a',
		1 => 'b',
		2 => 'c'
	],
	'type' => [
		0 => 'a',
		1 => 'b',
		2 => 'c'
	],
	'tmp_name' => [
		0 => 'a',
		1 => 'b',
		2 => 'c'
	],

];
$res = [];
foreach($pic as $key => $value)
{
	foreach($value as $k=>$v)
	{
		$res[$k][$key] = $v; 
	}
}

print_r($res);
echo '<br>';
print_r($pic);