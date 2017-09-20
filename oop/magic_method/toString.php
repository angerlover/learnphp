<?php 

class Person
{
	public function __toString()
	{
		return '这个人的名字是'.$this->name.'年龄是'.$this->age;
	}
}

$p1 = new Person;
$p1->name = 'nicky';
$p1->age = 45;
echo $p1;