<?php 
// 获取上一个月的最后一天
function get_last_day_of_last_month($date = '')
{
	if($date == '')
	{
		$date = time();
	}
	
	// 获取当前日期的月份的第几天
	$day = date('j',$date);
	return date('Y-m-d',strtotime("-{$day} days",$date));
}

// 测试
echo get_last_day_of_last_month();