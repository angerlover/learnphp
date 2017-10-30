<?php 
include 'base.php';
trait test
{
	function say()
	{
		echo 'trait';
	}
}
class Son1 extends Base
{
	use test;
	function say()
	{
		echo 'son';
	}
}

class Son2 extends Base
{
	use test;
}
$s1 = new Son1();
$s1->say();
echo '<hr>';
$s2 = new Son2();
$s2->say();
