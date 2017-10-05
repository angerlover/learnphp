<?php 
//返回数组中的某一列
function get_arr_column($arr,$key_name)
{
	$arr2 = [];
	foreach ($arr as $key => $value) {
		$arr2[] = $value[$key_name];
	}

	return $arr2;
}
$test = [

	[
		'id'=>2,
		'name'=>'kiss',
	],
	[
		'id'=>3,
		'name'=>'nicky',
	],
	[
		'id'=>4,
		'name'=>'haha',
	],
];

var_dump(get_arr_column($test,'id'));