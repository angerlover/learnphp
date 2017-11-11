<?php 
// 单例模式的实现
/**
 * 思路：1.私有化构造方法
 *      2.一个实例属性
 *		3.提供一个统一的制作实例的方法
 */

class Show
{
	private static $_instance = null;
	public static $num = 0;
	/**
	 * 私有化构造方法
	 */
	private function __construct()
	{
	}

	public static function createInstance()
	{
		if(!self::$_instance instanceof self)
		{
			echo '创建了新的对象了！';
			self::$_instance = new self;
		}
		return self::$_instance;
	}

	/**
	 * 私有化克隆方法
	 */
	private function __clone()
	{

	}
}


$s1 = Show::createInstance();
$s2 = Show::createInstance();
