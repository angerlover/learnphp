<?php 

// 分类中查找一个分类的字分类
/**
 *
 * $data 是所有的分类数据
 * $catId要查找的分类ID
 */

function _getChildren($data,$catId,$isClear = FALSE)
{
	static $ret = [];
	if($isClear)
	{
		$res = [];
	}
	foreach($data as $k => $v)
	{
		if($v['parent_id'] == $catId)
		{
			$ret[] = $v['id'];
			// 继续寻找这个$v的字分类
			_getChildren($data,$v['id']);
		}
	}
	return $_ret;
}