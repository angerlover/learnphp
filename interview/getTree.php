<?php 
// 分类中喜闻乐见的树形结构，其实就是取数据而已
function getTree($data,$parent_id = 0,$level = 0)
{
	static $ret = [];
	foreach($data as $k=> $v)
	{
		if($v['id'] = $parent_id)
		{
			$v['level'] = $level;  // 用来标记这个分类属于第几级
			$ret[] = $v['id'];
			// 递归
			getTree($data,$v['id'],$level+1)
		}
	}
}