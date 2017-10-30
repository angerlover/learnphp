<?php 
// 这个例子说明子类在new的时候会自动的调用父类的构造方法
class A
{
	protected $num;
	public function A()
	{
		echo '父类构造';
		$this->num = 3;
	}
}

class B extends A
{
	public function say()
	{
		echo $this->num;
	}
}

$b = new B;
$b2 = new B;
$b3 = new B;
var_dump($b);
// $b->say();