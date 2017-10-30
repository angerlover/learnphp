<?php 

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
