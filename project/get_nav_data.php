<?php 
/**
 *
 * 这是商品首页的导航条的分类数据，在所有分类取出前三类的分类
 *
 */

function getNavData()
{
	$catData = D('Category').select();
	$ret = [];
	foreach($catData as $k => $v)
	{
		if($v['parent_id'] == 0)
		{
			foreach($catData as $k1=>$v1)
			{
				if($v1['parent_id'] == $v['id'])
				{
					foreach($catData as $k2=>$v2)
					{
						if($v2['parent_id'] == $v1['id'])
						{
							$v1['children'][] = $v2;
						}
					}
					$v['children'][] = $v1;
				}
			}
			// 存入数组
			$ret[] = $v;
		}
	}
}