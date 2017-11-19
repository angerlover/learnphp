<?php 
/**
 *
 * 获取一个分类的所有父分类，制作面包屑导航
 *
 */

function parentPath($catId)
{
	// 返回值
	$ret = [];
	$info = $this->field('cat_name,cat_id,parent_id')->select();
	$ret[] = $info;
	// 如果这个类非顶级，则寻找父分类
	if($info['parent_id'] > 0)
	{
		$this->parentPath($info['parent_id']);
	}

	return $ret;

}