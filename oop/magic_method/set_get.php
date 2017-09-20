<?php 

class Person
{
	private $age;
	function __set($name,$value)
	{
		echo 'set方法调用';
		$this->$name = $value;
	}

	function __get($value)
	{
		return $this->$value;
	}
}


// $p1 = new Person;
// // 搞一个不存在的属性时 set方法会调用 但是set方法无需存在
// $p1->name = 'nicky';
// echo $p1->name;

// 搞一个private属性时，set和get方法都需要切一定会被调用
$p2 = new Person;
$p2->age = 28;
echo $p2->age;