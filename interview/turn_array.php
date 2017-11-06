<?php 

// 把下面的$arr1变成$arr2

$arr1 = [
		'0'=>['fid'=>1,'tid'=>1,'name'=>'Name1'],
		'1'=>['fid'=>1,'tid'=>2,'name'=>'Name2'],
		'2'=>['fid'=>1,'tid'=>5,'name'=>'Name3'],
		'3'=>['fid'=>1,'tid'=>7,'name'=>'Name4'],
		'4'=>['fid'=>3,'tid'=>9,'name'=>'Name5'],

		];


$arr2 = [

	'0'=>[
		'0'=>['tid'=>1,'name'=>'Name1'],
		'1'=>['tid'=>2,'name'=>'Name2'],
		'2'=>['tid'=>5,'name'=>'Name3'],
		'3'=>['tid'=>7,'name'=>'Name4'],
	],

	'1'=>[
		'0'=>['tid'=>9,'name'=>'Name5']
	]

];


// 答案写法
$arr_temp = array();
$arr3 = [];
foreach ($arr1 as $key => $value) {
	$arr_temp[$value['fid']][] = array_slice($value, 1);
}

foreach ($arr_temp as $key => $value) {
	$arr3[] = $value;
}

print_r($arr3['0']);