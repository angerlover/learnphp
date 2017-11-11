<?php 
// 测试——autoload的使用方法,貌似只能在当前目录下工作啊

// 注意点 如果如果类存在继承关系（例如：ClassB extends ClassA），并且ClassA不在ClassB所在目录
// 利用__autoload魔术函数实例化ClassB的时候就会受到一个致命错误：
// 另外类名和文件名要保持一致

function __autoload($classname)
{
	$classpath = './'.$classname.'.php';
	if(file_exists($classpath))
	{
		require_once($classpath);
	}
	else 
	{
		return '载入错误';
	}
}


$t1 = new ClassA(); 
$t2 = new ClassB();