<?php 

// 解析url的参数
function parse_url_param($url)
{
	$data = array();
	$url = explode('?', $url);
	$params = end($url);
	$param_array = explode('&', $params);
	foreach ($param_array as $key => $value) 
	{
		$temp = explode('=', $value);
		$data[$temp[0]] = $temp[1];
	}

	return $data;
}

// 测试
var_dump(parse_url_param('https://pan.baidu.com/disk/home?pay_code=alipay&bank_code=ICBC-DEBIT'));