<?php 

class Person
{
	static $count = 1;
	public function __toString()
	{
		return '这个人的名字是'.$this->name.'年龄是'.$this->age.'现在调用了'.self::$count.'次';
	}
}

$p1 = new Person;
// echo $p1->count;
// echo Person::$count; 
echo $p1;