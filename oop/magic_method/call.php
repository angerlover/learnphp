<?php 

class Person
{
	function __call($name,$arguments)
	{
		switch (count($arguments)) {
			case 2:
				return $arguments[0] + $arguments[1];
				break;
			case 1:
				return arguments[0];
				break;
			default:
				echo '参数不对啊';
				break;
		}

	}
}

// 调用一个不存在的方法
$p1 = new Person;
$p1->make(4);